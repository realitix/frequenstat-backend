(function($) {
    $.fn.frequenStatChartRatio = function(params) {
        var p = {
            displayType: 'hour',
            dataEntry: [],
            dataRatio: [],
            tickColor: "#efefef",
            colors: ["#6595b4", "#7e9d3a","#BD362F", "#FF9F01"],
            unique: false
        };
        
        // Fusionner les paramètres par défaut et ceux de l'utilisateur
        p = $.extend(p, params);
        
        // On transforme this en objet jquery
        var container = $(this);
        
        // Définition des paramètres calculés
        switch( p.displayType ) {
            case 'month':
                p.width = 10*24*60*60*1000;
                p.tf = "%b %Y";
                break;
			case 'day':
                p.width = 6*60*60*1000;
                p.tf = "%d %b";
                break;
            case 'hour':
                p.width = 15*60*1000;
                p.tf = '%H:%M';
                break;
            case 'minute':
                p.width = 15*1000;
                p.tf = '%H:%M';
                break;
        }
        
        var unique = true;
        if( 
            $.isArray(p.dataEntry) && 
            $.isArray(p.dataEntry[0]) && 
            $.isArray(p.dataEntry[0][0])
        ) {
            unique = false;
        }
        
        if( unique ) {
            p.dataEntry = [p.dataEntry];
            p.dataRatio = [p.dataRatio];
        }
        
        // Force
        if( p.unique ) {
            unique = true;
        }
        
        var dataOptions = [];
        
        // Bars
        for( var i = 0; i < p.dataEntry.length; i++) {
			var d = {
				bars : {
					show: true,
					barWidth : p.width,
					order: (i+1),
					lineWidth: 1,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.7 }, { opacity: 1 } ] },
                    numbers: {
                        show : true
                    }
				},
				label: "Nombre d'entrées en période "+(i+1),
                data: p.dataEntry[i]
			};
			
			if(unique) {
                d = $.extend(true, d, {
                    bars : {
                        align: 'center'
                    },
                    label: "Nombre d'entrées"
                });
                delete d.bars.order;
            }
			
            dataOptions.push(d);
        }
        
        // Lines
        for( i = 0; i < p.dataEntry.length; i++) {
			var d = {
				lines : {
					show: true
				},
				curvedLines: {
                    apply: true
				},
				yaxis: 2,
				label: "Taux d'entrée en période "+(i+1),
                data: p.dataRatio[i]
			};
			
			if(unique) {
                d = $.extend(true, d, {
                    label: "Taux d'entrée"
                });
            }
			
            dataOptions.push(d);
			dataOptions.push({
				points : {
                    show: true
				},
				yaxis: 2,
				label: null,
                data: p.dataRatio[i]
			});
        }
		
		var options = {
			xaxis: {
				mode: "time",
				timezone: "browser",
				monthNames: ["Jan", "Fev", "Mars", "Avril", "Mai", "Juin", "Juil", "Aout", "Sept", "Oct", "Nov", "Dec"],
                dayNames: ["dim", "lun", "mar", "mer", "jeu", "ven", "sam"],
                timeformat: p.tf,
                minTickSize: [1, p.displayType]
			},
			yaxes: [ { }, { show: false } ],
			grid: {
				hoverable: true,
				borderWidth : 0,
				tickColor : p.tickColor,
				borderColor : p.tickColor
			},
			legend: {
				show: true,
				backgroundOpacity: 0.2
			},
			series: {
                curvedLines: {active: true}
			},
			tooltip: true,
			tooltipOpts : {
				content : tooltipContent,
				defaultTheme : true
			},
			colors : p.colors
		};
        
        function tooltipContent(label, xval, yval, flotItem) {
			var ts = '';
			if( flotItem.series.points.show || flotItem.series.lines.show) {
				ts = 'line';
			}
			if( flotItem.series.bars.show ) {
				ts = 'bar';
			}
			
            var resp = "";
            yval = Math.round(yval);
            if( unique ) {
				switch( flotItem.seriesIndex ) {
					case 0:
						resp = yval + " entrées ";
						break;
					case 1:
					case 2:
						resp = "Taux d'entrée de "+yval+"% ";
						break;
				}
            } else {
				switch( flotItem.seriesIndex ) {
					case 0:
						resp = yval + " entrées à %s dans la première période";
						break;
					case 1:
						resp = yval + " entrées à %s dans la deuxième période";
						break;
					case 2:
					case 3:
						resp = "Taux d'entrée de "+yval+"% à %s dans la première période";
						break;
					case 4:
					case 5:
						resp = "Taux d'entrée de "+yval+"% à %s dans la deuxième période";
						break;
				}
            }

			var dStr = '';
			var d = new Date(xval);
			var hour = 0;
			var minute = 0;
			var month = 0;
			var year = 0;
			var day = 0;
			switch( p.displayType ) {
                case 'hour':
					if(ts == 'bar') {
                        d.setHours(d.getHours() + Math.round(d.getMinutes()/60));
                        d.setMinutes(0);
                    }
					hour = (d.getHours() < 10) ? '0' + d.getHours() : d.getHours();
					minute = (d.getMinutes() < 10) ? '0' + d.getMinutes() : d.getMinutes();
                    dStr = "à "+hour+":"+minute;
                    break;
                case 'minute':
                    d.setMinutes(d.getMinutes() + Math.round(d.getSeconds()/60));
                    d.setSeconds(0);
                    hour = (d.getHours() < 10) ? '0' + d.getHours() : d.getHours();
                    minute = (d.getMinutes() < 10) ? '0' + d.getMinutes() : d.getMinutes();
                    dStr = "à "+hour+":"+minute;
                    break;
                case 'month':
					month = d.getMonth();
					year = d.getFullYear();
					dStr = "en "+getMonthName(month)+" "+year;
					break;
				case 'day':
					month = d.getMonth();
					day = d.getDate();
					dStr = "le "+day+" "+getMonthName(month);
					break;
            }
			
			if( unique )
				return resp + dStr;
			return resp.replace('%s', dStr);
        }
        
        function getMonthName(monthNumber) {
			var month = [];
			month[0] = "Janvier";
			month[1] = "Février";
			month[2] = "Mars";
			month[3] = "Avril";
			month[4] = "Mai";
			month[5] = "Juin";
			month[6] = "Juillet";
			month[7] = "Août";
			month[8] = "Septembre";
			month[9] = "Octobre";
			month[10] = "Novembre";
			month[11] = "Décembre";
			return month[monthNumber];
        }
		
        $.plot(
            container, 
            dataOptions, 
            options
        );
        
        return this;
    };
})(jQuery);