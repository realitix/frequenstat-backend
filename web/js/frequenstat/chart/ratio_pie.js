(function($) {
    // définition du plugin jQuery
    $.fn.frequenStatChartRatioPie = function(params) {
        var p = {
            dataSumEntry: 0,
            dataSumTransit: 0,
            dataSumRatio: 0,
            colors: ["#6595b4", "#7e9d3a", "#666", "#BBB"]
        };
        
        // Fusionner les paramètres par défaut et ceux de l'utilisateur
        p = $.extend(p, params);
        
        // On transforme this en objet jquery
        var container = $(this);
        
		var dataOptions = [
            {
                label: "passages",
                data: p.dataSumTransit
            },
            {
                label: "entrées",
                data: p.dataSumEntry
            }
        ];
        
        var options = {
			series : {
				pie : {
					show : true,
					innerRadius : 0.45,
					radius : 0.6,
					label : {
						show : true,
						formatter: function(label, slice) {
							return "<div style='font-size:14px;text-align:center;padding:0px;color:" + slice.color + ";'>"+slice.data[0][1] + "<br />" + label + "</div>";
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
		};

		var ratioPieChart = $.plot(container, dataOptions, options);
		
		var ctx = ratioPieChart.getCanvas().getContext("2d");
		var height = ctx.canvas.height;
		var width = ctx.canvas.width;
		var posX = width/2 - 30;
		var posY = height/2 + 10;
		var sumRatio = Math.round(p.dataSumRatio);
		ctx.font = "36px 'Segoe UI'";
        ctx.fillStyle = "#666";
        ctx.fillText(sumRatio+"%", posX, posY);
        
        return this;
    };
})(jQuery);