/* Copyright Joe Tsoi, FreeBSD-License
 * simple flot plugin to draw bar numbers halfway in bars
 *
 * options are
 * series: {
 *     bars: {
 *         showNumbers: boolean (left for compatibility)
 *         numbers : {
 *             show : boolean,
 *             alignX : number or function,
 *             alignY : number or function,
 *         }
 *     }
 * }
 */
(function ($) {
    var options = {
        bars: {
            numbers: {
            }
        }
    };
    
    function stringWidth(str, font) {
        var f = font,
            o = $('<div>' + str + '</div>')
            .css({'position': 'absolute', 'float': 'left', 'white-space': 'nowrap', 'visibility': 'hidden', 'font': f})
            .appendTo($('body')),
        w = o.width();
        o.remove();
        return w;
    }
    
    function processOptions(plot, options) {
        var bw = options.series.bars.barWidth;
        var numbers = options.series.bars.numbers;
        var horizontal = options.series.bars.horizontal;
        if(horizontal){
            numbers.xAlign = numbers.xAlign || function(x){ return x / 2; };
            numbers.yAlign = numbers.yAlign || function(y){ return y + (bw / 2); };
            numbers.horizontalShift = 0;
        } else {
            numbers.xAlign = numbers.xAlign || function(x){ return x + (bw / 2); };
            numbers.yAlign = numbers.yAlign || function(y){ return (y); };
            numbers.horizontalShift = 1;
        }
    }

    function draw(plot, ctx){
        $.each(plot.getData(), function(idx, series) {
            if(series.bars.numbers.show || series.bars.showNumbers){
                var ps = series.datapoints.pointsize;
                var points = series.datapoints.points;
                var ctx = plot.getCanvas().getContext('2d');
                var offset = plot.getPlotOffset();
                //alignOffset = series.bars.align === "left" ? series.bars.barWidth / 2 : 0;
                alignOffset = series.bars.barWidth / 2;
                xAlign = series.bars.numbers.xAlign;
                yAlign = series.bars.numbers.yAlign;
                axes = {
                    0 : 'x',
                    1 : 'y'
                } 
                hs = series.bars.numbers.horizontalShift;
                for(var i = 0; i < points.length; i += ps){
                    barNumber = i+1;
                    var point = {
                        'x': points[i],
                        'y': points[i+1]
                    };
                    
                    if( series.bars.align !== 'center' ) {
                        point.x = point.x + alignOffset;
                    }
                    
                    var font = "14px 'Segoe UI'";
                    var text = '';
                    if( points[barNumber] !== null) {
                        text = points[barNumber].toString(10);
                    }
                    var strWidth = stringWidth(text, font);
                    var c = plot.p2c(point);
                    ctx.font = font;
                    ctx.fillStyle = "#666";
                    ctx.fillText(text, c.left + offset.left - strWidth / 2, c.top)
                }
            }
        });
    }
    
    function init(plot) {
        plot.hooks.processOptions.push(processOptions);
        plot.hooks.draw.push(draw);
    }

    $.plot.plugins.push({
        init: init,
        options: options,
        name: 'barnumbers',
        version: '0.4'
    });
})(jQuery);
