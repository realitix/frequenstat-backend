(function($) {
    $.fn.frequenStatChartRedemptionPie = function(params) {
        var p = {
            dataSumMulti: 0,
            dataSumUnique: 0,
            dataRedemptionRate: 0,
            colors: ["#6595b4", "#7e9d3a", "#666", "#BBB"]
        };
        
        // Fusionner les paramètres par défaut et ceux de l'utilisateur
        p = $.extend(p, params);
        
        // On transforme this en objet jquery
        var container = $(this);
        
		var dataOptions = [
            {
                label: "uniques",
                data: p.dataSumUnique
            },
            {
                label: "revenants",
                data: p.dataSumMulti
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
		}

		var redemptionPieChart = $.plot(container, dataOptions, options);
		
		var ctx = redemptionPieChart.getCanvas().getContext("2d");
		var height = ctx.canvas.height;
		var width = ctx.canvas.width;
		var posX = width/2 - 30;
		var posY = height/2 + 10;
		var sumRatio = Math.round(p.dataRedemptionRate);
		ctx.font = "36px 'Segoe UI'";
        ctx.fillStyle = "#666";
        ctx.fillText(sumRatio+"%", posX, posY);
        
        return this;
    };
})(jQuery);