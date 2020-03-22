(function($) {
    // définition du plugin jQuery
    $.fn.frequenStatChartSimpleOsPie = function(params) {
        var p = {
            dataOs: [],
            colors: ["#6595b4", "#7e9d3a", "#666", "#BBB"]
        };
        
        // Fusionner les paramètres par défaut et ceux de l'utilisateur
        p = $.extend(p, params);
        
        // On transforme this en objet jquery
        var container = $(this);
        
        if( p.dataOs.length === 0 ) {
            container.text("Pas assez d'informations pour générer ce graphique.");
            return this;
        }
        
        var options = {
			series : {
				pie : {
					show : true,
					innerRadius : 0.5,
					radius : 0.7,
					label : {
						show : true,
						formatter: function(label, slice) {
							return "<div style='font-size:14px;text-align:center;padding:0px;color:" + slice.color + ";'>" + label + "<br/>" + Math.round(slice.percent) + "%</div>";
						}
					}
				}
			},
			legend : {
				show : false
			},
			grid : {
				hoverable : true
			},
			colors : p.colors
		}
	
		$.plot(container, dataOs, options);
        
        return this;
    };
})(jQuery);