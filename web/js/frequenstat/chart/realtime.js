(function($) {
        
    // définition du plugin jQuery
    $.fn.frequenStatChartRealtime = function(params) {
        var p = {
            captureUrl: '',
            tickColor: "#efefef",
            colors: ["#6595b4", "#7e9d3a", "#666", "#BBB"]
        };
        
        // Fusionner les paramètres par défaut et ceux de l'utilisateur
        p = $.extend(p, params);
        
        // On transforme this en objet jquery
        var container = $(this);
        
        // On déclare les variables
        var nbImagesPerSecond = 60;
        var nbSecondsDecal = 30;
        var nbSeconds = 30;
        var nbSecondsMacs = 60;
        var xMax = Date.now();
        var xMin = xMax - (nbSeconds*1000);
        var updateInterval = 1000/nbImagesPerSecond;
        var datas = [];
        var datasAjax = [];
        var macs = {};
        
        // On indique le décalage dans l'url
        var loadSeconds = nbSeconds + nbSecondsDecal;
        p.captureUrl = p.captureUrl + '?seconds='+loadSeconds.toString();
		
		var dataOptions = [
		{
            lines : {
				show: true,
			},
			curvedLines: {
                apply: true
			},
			label: "Nombre de personnes détectées",
            data: datas
        },
        {
            points : {
				show: true,
			},
			showNumbers: true,
			label: null,
            data: datas
        }];
		var options = {
			yaxis: {
				//min: 0,
				//max: 100
			},
			xaxis: {
				mode: "time",
                timezone: "browser",
                timeformat: '%H:%M:%S',
                min: xMin,
                max: xMax
			},
			series: {
                curvedLines: {active: true}
			},
			grid: {
				hoverable: false,
				borderWidth : 0,
				tickColor : p.tickColor,
				borderColor : p.tickColor
			},
			legend: {
				show: true,
				position: "nw"
			},
			colors : p.colors
		};
		
		var plot = $.plot(
            container, 
            dataOptions, 
            options
        );
        
        /**
         **************
         * Fonctions mises à jour
         * ************
         */
         
        function countObj(obj) {
            var count = 0;
            for(var key in obj) {
                if (obj.hasOwnProperty(key)) {
                    ++count;
                }
            }
            return count;
        }


        function updateDatas() {
			for (var i = 0; i < datasAjax.length; i++) {
                var continueB = true;
                for (var k = 0; k < datas.length; k++) {
                    if( datasAjax[i].dateCapture*1000 == datas[k][0] ) {
                        continueB = false;
                    }
                }
                
                if( !continueB ) {
                    continue;
                }

                // On supprime toutes les macs anciennes
                for (var key in macs) {
                    if( (datasAjax[i].dateCapture - macs[key]) > (nbSecondsMacs)) {
                        delete macs[key];
                    }
                }
            
				for (var j = 0; j < datasAjax[i].macs.length; j++) {
					macs[datasAjax[i].macs[j]] = datasAjax[i].dateCapture;
				}
					
				var tmp = [(datasAjax[i].dateCapture*1000), countObj(macs)];
				datas.push(tmp);
			}
		}
		
        function updateAjax() {
            var jqxhr = $.getJSON(p.captureUrl)
                .done(function(data) {
                    datasAjax = data;
                    updateDatas();
                })
                .fail(function() {
                })
                .always(function() {
                });
            setTimeout(updateAjax, (nbSecondsDecal/2)*1000);
        }
		
		function updateCleanDatas() {
			if ( typeof datas[0] != 'undefined' && (Date.now() - datas[0][0]) >= (nbSeconds - 0.5 + nbSecondsDecal)*1000) {
				datas = datas.slice(1);
			}
		}
        
        function updateDataOption() {
            updateCleanDatas();
            dataOptions[0]['data'] = datas;
            dataOptions[1]['data'] = datas;
            plot.setData(dataOptions);
            setTimeout(updateDataOption, 1000);
        }
        
        function updateGrid() {
            plot.getOptions().xaxes[0].max = Date.now() - nbSecondsDecal * 1000;
            plot.getOptions().xaxes[0].min = plot.getOptions().xaxes[0].max - (nbSeconds*1000);
        }

		function updateDraw() {
            updateGrid();
            plot.setupGrid();
			plot.draw();
			setTimeout(updateDraw, updateInterval);
		}
		
		updateAjax();
		updateDataOption();
		updateDraw();
        
        return this;
    };
})(jQuery);