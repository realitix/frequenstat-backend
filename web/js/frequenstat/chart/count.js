(function($) {
        
    // définition du plugin jQuery
    $.fn.frequenStatChartCount = function(params) {
        var p = {
            displayType: 'hour',
            dataTransit: [],
            tickColor: "#efefef",
            colors: ["#6595b4", "#7e9d3a", "#666", "#BBB"],
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
            $.isArray(p.dataTransit) && 
            $.isArray(p.dataTransit[0]) && 
            $.isArray(p.dataTransit[0][0])
        ) {
            unique = false;
        }
        
        if( unique ) {
            p.dataTransit = [p.dataTransit];
        }
        
        // Force
        if( p.unique ) {
            unique = true;
        }
        
        var dataOptions = [];
        
        for( var i = 0; i < p.dataTransit.length; i++) {
            var d = {
                bars : {
                    order: (i+1),
					show: true,
					barWidth : p.width,
					lineWidth: 1,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.7 }, { opacity: 1 } ] },
                    numbers: {
                        show : true
                    }
				},
				label: "Période " + (i+1),
                data: p.dataTransit[i]
            };
            
            if(unique) {
                d = $.extend(true, d, {
                    bars : {
                        align: 'center'
                    },
                    label: "Smartphones détectés"
                });
                delete d.bars.order;
            }
            
            dataOptions.push(d);
        }
		
		var options = {
			xaxis: 
                {
                    mode: "time",
                    timezone: "browser",
                    monthNames: ["Jan", "Fev", "Mars", "Avril", "Mai", "Juin", "Juil", "Aout", "Sept", "Oct", "Nov", "Dec"],
                    dayNames: ["dim", "lun", "mar", "mer", "jeu", "ven", "sam"],
                    timeformat: p.tf,
                    minTickSize: [1, p.displayType]
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
			tooltip: true,
			tooltipOpts : {
				content : tooltipContent,
				defaultTheme : true
			},
			colors : p.colors
		};
		
		function tooltipContent(label, xval, yval, flotItem) {
            var dStr = '';
            var d = new Date(xval);
            var hour = 0;
            var minute = 0;
            var month = 0;
            var year = 0;
            var day = 0;
            
            switch( p.displayType ) {
                case 'hour':
                    d.setHours(d.getHours() + Math.round(d.getMinutes()/60));
                    d.setMinutes(0);
                    hour = (d.getHours() < 10) ? '0' + d.getHours() : d.getHours();
                    dStr = "à "+hour+":00";
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
            
            var resp = yval + " passages " + dStr + " dans la " + label;
            
            if(unique) {
                resp = yval + " " + label + " " + dStr;
            }
            
            return resp;
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