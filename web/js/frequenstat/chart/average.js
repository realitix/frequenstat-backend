(function($) {
    $.fn.frequenStatChartAverage = function(params) {
        var p = {
            displayType: 'hour',
            dataAverage: [],
            averageTimeFormat: "%M:%S",
            tickColor: "#efefef",
            colors: ["#6595b4", "#6595b4", "#7e9d3a", "#7e9d3a", "#666", "#BBB"],
            unique: false
        };
        
        // Fusionner les paramètres par défaut et ceux de l'utilisateur
        p = $.extend(p, params);
        
        // On transforme this en objet jquery
        var container = $(this);
        
        // Définition des paramètres calculés
        switch( p.displayType ) {
            case 'month':
                p.tf = "%b %Y";
                break;
			case 'day':
                p.tf = "%d %b";
                break;
            case 'hour':
                p.tf = '%H:%M';
                break;
            case 'minute':
                p.tf = '%H:%M';
                break;
        }
        
        var unique = true;
        if( 
            $.isArray(p.dataAverage) && 
            $.isArray(p.dataAverage[0]) && 
            $.isArray(p.dataAverage[0][0])
        ) {
            unique = false;
        }
        
        if( unique ) {
            p.dataAverage = [p.dataAverage];
        }
        
        // Force
        if( p.unique ) {
            unique = true;
        }
        
        var yTimeFormat = "%M:%S";
        
        var dataOptions = [];
        
        for( var i = 0; i < p.dataAverage.length; i++) {
			var d = {
				lines : {
					show: true
				},
				curvedLines: {
                    apply: true
				},
				label: "Temps moyen en période "+(i+1),
                data: p.dataAverage[i]
			};
			
			if( unique ) {
				d.label = "Temps moyen";
			}
			
			dataOptions.push(d);
			dataOptions.push({
				points : {
                    show: true
				},
				label: null,
                data: p.dataAverage[i]
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
			yaxis: {
				mode: "time",
				timezone: "browser",
				timeformat: yTimeFormat
			},
			grid: {
				hoverable: true,
				borderWidth : 0,
				tickColor : p.tickColor,
				borderColor : p.tickColor
			},
			legend: {
				show: true
			},
			series: {
                curvedLines: {active: true}
			},
			tooltip: true,
			tooltipOpts : {
				content : function(label, xval, yval, flotItem) {
					var yDate = new Date(yval);
					var resp = '';
					if( yDate.getHours() > 0) {
						resp = "Temps moyen de "+yDate.getHours()+" heure(s) et "+yDate.getMinutes()+" minutes ";
					}
					else {
                        resp = "Temps moyen de "+yDate.getMinutes()+" minutes et "+yDate.getSeconds()+" secondes ";
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
                    resp = resp + dStr;
                    
                    if( !unique ) {
						var periode = flotItem.seriesIndex/2 + 1;
						resp = resp + " dans la période " + periode;
                    }
                    
					return resp;
				},
				defaultTheme : true
			},
			colors : p.colors
		};
		
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