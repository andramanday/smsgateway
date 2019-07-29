/*
 Highcharts JS v7.1.1 (2019-04-09)

 Boost module

 (c) 2010-2019 Highsoft AS
 Author: Torstein Honsi

 License: www.highcharts.com/license
*/
(function(g){"object"===typeof module&&module.exports?(g["default"]=g,module.exports=g):"function"===typeof define&&define.amd?define("highcharts/modules/boost",["highcharts"],function(t){g(t);g.Highcharts=t;return g}):g("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(g){function t(e,g,c,y){e.hasOwnProperty(g)||(e[g]=y.apply(null,c))}g=g?g._modules:{};t(g,"modules/boost/boostables.js",[],function(){return"area arearange column columnrange bar line scatter heatmap bubble treemap".split(" ")});
t(g,"modules/boost/boostable-map.js",[g["modules/boost/boostables.js"]],function(e){var g={};e.forEach(function(c){g[c]=1});return g});t(g,"modules/boost/wgl-shader.js",[g["parts/Globals.js"]],function(e){var g=e.pick;return function(c){function u(){v.length&&e.error("[highcharts boost] shader error - "+v.join("\n"))}function h(a,f){var b=c.createShader("vertex"===f?c.VERTEX_SHADER:c.FRAGMENT_SHADER);c.shaderSource(b,a);c.compileShader(b);return c.getShaderParameter(b,c.COMPILE_STATUS)?b:(v.push("when compiling "+
f+" shader:\n"+c.getShaderInfoLog(b)),!1)}function w(){function b(b){return c.getUniformLocation(a,b)}var e=h("#version 100\n#define LN10 2.302585092994046\nprecision highp float;\nattribute vec4 aVertexPosition;\nattribute vec4 aColor;\nvarying highp vec2 position;\nvarying highp vec4 vColor;\nuniform mat4 uPMatrix;\nuniform float pSize;\nuniform float translatedThreshold;\nuniform bool hasThreshold;\nuniform bool skipTranslation;\nuniform float xAxisTrans;\nuniform float xAxisMin;\nuniform float xAxisMinPad;\nuniform float xAxisPointRange;\nuniform float xAxisLen;\nuniform bool  xAxisPostTranslate;\nuniform float xAxisOrdinalSlope;\nuniform float xAxisOrdinalOffset;\nuniform float xAxisPos;\nuniform bool  xAxisCVSCoord;\nuniform bool  xAxisIsLog;\nuniform bool  xAxisReversed;\nuniform float yAxisTrans;\nuniform float yAxisMin;\nuniform float yAxisMinPad;\nuniform float yAxisPointRange;\nuniform float yAxisLen;\nuniform bool  yAxisPostTranslate;\nuniform float yAxisOrdinalSlope;\nuniform float yAxisOrdinalOffset;\nuniform float yAxisPos;\nuniform bool  yAxisCVSCoord;\nuniform bool  yAxisIsLog;\nuniform bool  yAxisReversed;\nuniform bool  isBubble;\nuniform bool  bubbleSizeByArea;\nuniform float bubbleZMin;\nuniform float bubbleZMax;\nuniform float bubbleZThreshold;\nuniform float bubbleMinSize;\nuniform float bubbleMaxSize;\nuniform bool  bubbleSizeAbs;\nuniform bool  isInverted;\nfloat bubbleRadius(){\nfloat value \x3d aVertexPosition.w;\nfloat zMax \x3d bubbleZMax;\nfloat zMin \x3d bubbleZMin;\nfloat radius \x3d 0.0;\nfloat pos \x3d 0.0;\nfloat zRange \x3d zMax - zMin;\nif (bubbleSizeAbs){\nvalue \x3d value - bubbleZThreshold;\nzMax \x3d max(zMax - bubbleZThreshold, zMin - bubbleZThreshold);\nzMin \x3d 0.0;\n}\nif (value \x3c zMin){\nradius \x3d bubbleZMin / 2.0 - 1.0;\n} else {\npos \x3d zRange \x3e 0.0 ? (value - zMin) / zRange : 0.5;\nif (bubbleSizeByArea \x26\x26 pos \x3e 0.0){\npos \x3d sqrt(pos);\n}\nradius \x3d ceil(bubbleMinSize + pos * (bubbleMaxSize - bubbleMinSize)) / 2.0;\n}\nreturn radius * 2.0;\n}\nfloat translate(float val,\nfloat pointPlacement,\nfloat localA,\nfloat localMin,\nfloat minPixelPadding,\nfloat pointRange,\nfloat len,\nbool  cvsCoord,\nbool  isLog,\nbool  reversed\n){\nfloat sign \x3d 1.0;\nfloat cvsOffset \x3d 0.0;\nif (cvsCoord) {\nsign *\x3d -1.0;\ncvsOffset \x3d len;\n}\nif (isLog) {\nval \x3d log(val) / LN10;\n}\nif (reversed) {\nsign *\x3d -1.0;\ncvsOffset -\x3d sign * len;\n}\nreturn sign * (val - localMin) * localA + cvsOffset + \n(sign * minPixelPadding);\n}\nfloat xToPixels(float value) {\nif (skipTranslation){\nreturn value;// + xAxisPos;\n}\nreturn translate(value, 0.0, xAxisTrans, xAxisMin, xAxisMinPad, xAxisPointRange, xAxisLen, xAxisCVSCoord, xAxisIsLog, xAxisReversed);// + xAxisPos;\n}\nfloat yToPixels(float value, float checkTreshold) {\nfloat v;\nif (skipTranslation){\nv \x3d value;// + yAxisPos;\n} else {\nv \x3d translate(value, 0.0, yAxisTrans, yAxisMin, yAxisMinPad, yAxisPointRange, yAxisLen, yAxisCVSCoord, yAxisIsLog, yAxisReversed);// + yAxisPos;\nif (v \x3e yAxisLen) {\nv \x3d yAxisLen;\n}\n}\nif (checkTreshold \x3e 0.0 \x26\x26 hasThreshold) {\nv \x3d min(v, translatedThreshold);\n}\nreturn v;\n}\nvoid main(void) {\nif (isBubble){\ngl_PointSize \x3d bubbleRadius();\n} else {\ngl_PointSize \x3d pSize;\n}\nvColor \x3d aColor;\nif (skipTranslation \x26\x26 isInverted) {\ngl_Position \x3d uPMatrix * vec4(aVertexPosition.y + yAxisPos, aVertexPosition.x + xAxisPos, 0.0, 1.0);\n} else if (isInverted) {\ngl_Position \x3d uPMatrix * vec4(yToPixels(aVertexPosition.y, aVertexPosition.z) + yAxisPos, xToPixels(aVertexPosition.x) + xAxisPos, 0.0, 1.0);\n} else {\ngl_Position \x3d uPMatrix * vec4(xToPixels(aVertexPosition.x) + xAxisPos, yToPixels(aVertexPosition.y, aVertexPosition.z) + yAxisPos, 0.0, 1.0);\n}\n}",
"vertex"),k=h("precision highp float;\nuniform vec4 fillColor;\nvarying highp vec2 position;\nvarying highp vec4 vColor;\nuniform sampler2D uSampler;\nuniform bool isCircle;\nuniform bool hasColor;\nvoid main(void) {\nvec4 col \x3d fillColor;\nvec4 tcol;\nif (hasColor) {\ncol \x3d vColor;\n}\nif (isCircle) {\ntcol \x3d texture2D(uSampler, gl_PointCoord.st);\ncol *\x3d tcol;\nif (tcol.r \x3c 0.0) {\ndiscard;\n} else {\ngl_FragColor \x3d col;\n}\n} else {\ngl_FragColor \x3d col;\n}\n}","fragment");
if(!e||!k)return a=!1,u(),!1;a=c.createProgram();c.attachShader(a,e);c.attachShader(a,k);c.linkProgram(a);if(!c.getProgramParameter(a,c.LINK_STATUS))return v.push(c.getProgramInfoLog(a)),u(),a=!1;c.useProgram(a);c.bindAttribLocation(a,0,"aVertexPosition");q=b("uPMatrix");K=b("pSize");D=b("fillColor");r=b("isBubble");n=b("bubbleSizeAbs");d=b("bubbleSizeByArea");R=b("uSampler");p=b("skipTranslation");f=b("isCircle");I=b("isInverted");return!0}function l(b,f){c&&a&&(b=m[b]=m[b]||c.getUniformLocation(a,
b),c.uniform1f(b,f))}var m={},a,q,K,D,r,n,d,p,f,I,v=[],R;return c&&!w()?!1:{psUniform:function(){return K},pUniform:function(){return q},fillColorUniform:function(){return D},setBubbleUniforms:function(b,p,k){var e=b.options,v=Number.MAX_VALUE,h=-Number.MAX_VALUE;c&&a&&"bubble"===b.type&&(v=g(e.zMin,Math.min(v,Math.max(p,!1===e.displayNegative?e.zThreshold:-Number.MAX_VALUE))),h=g(e.zMax,Math.max(h,k)),c.uniform1i(r,1),c.uniform1i(f,1),c.uniform1i(d,"width"!==b.options.sizeBy),c.uniform1i(n,b.options.sizeByAbsoluteValue),
l("bubbleZMin",v),l("bubbleZMax",h),l("bubbleZThreshold",b.options.zThreshold),l("bubbleMinSize",b.minPxSize),l("bubbleMaxSize",b.maxPxSize))},bind:function(){c&&a&&c.useProgram(a)},program:function(){return a},create:w,setUniform:l,setPMatrix:function(b){c&&a&&c.uniformMatrix4fv(q,!1,b)},setColor:function(b){c&&a&&c.uniform4f(D,b[0]/255,b[1]/255,b[2]/255,b[3])},setPointSize:function(b){c&&a&&c.uniform1f(K,b)},setSkipTranslation:function(b){c&&a&&c.uniform1i(p,!0===b?1:0)},setTexture:function(b){c&&
a&&c.uniform1i(R,b)},setDrawAsCircle:function(b){c&&a&&c.uniform1i(f,b?1:0)},reset:function(){c&&a&&(c.uniform1i(r,0),c.uniform1i(f,0))},setInverted:function(b){c&&a&&c.uniform1i(I,b)},destroy:function(){c&&a&&(c.deleteProgram(a),a=!1)}}}});t(g,"modules/boost/wgl-vbuffer.js",[],function(){return function(e,g,c){function u(){h&&(e.deleteBuffer(h),w=h=!1);a=0;l=c||2;q=[]}var h=!1,w=!1,l=c||2,m=!1,a=0,q;return{destroy:u,bind:function(){if(!h)return!1;e.vertexAttribPointer(w,l,e.FLOAT,!1,0,0)},data:q,
build:function(a,c,r){var n;q=a||[];if(!(q&&0!==q.length||m))return u(),!1;l=r||l;h&&e.deleteBuffer(h);m||(n=new Float32Array(q));h=e.createBuffer();e.bindBuffer(e.ARRAY_BUFFER,h);e.bufferData(e.ARRAY_BUFFER,m||n,e.STATIC_DRAW);w=e.getAttribLocation(g.program(),c);e.enableVertexAttribArray(w);return!0},render:function(a,c,r){var g=m?m.length:q.length;if(!h||!g)return!1;if(!a||a>g||0>a)a=0;if(!c||c>g)c=g;e.drawArrays(e[(r||"points").toUpperCase()],a/l,(c-a)/l);return!0},allocate:function(c){a=-1;m=
new Float32Array(4*c)},push:function(c,e,r,g){m&&(m[++a]=c,m[++a]=e,m[++a]=r,m[++a]=g)}}}});t(g,"modules/boost/wgl-renderer.js",[g["modules/boost/wgl-shader.js"],g["modules/boost/wgl-vbuffer.js"],g["parts/Globals.js"]],function(e,g,c){var u=c.win.document,h=c.merge,w=c.objEach,l=c.isNumber,m=c.some,a=c.Color,q=c.pick;return function(K){function t(a){var b,f;return a.isSeriesBoosting?(b=!!a.options.stacking,f=a.xData||a.options.xData||a.processedXData,b=(b?a.data:f||a.options.data).length,"treemap"===
a.type?b*=12:"heatmap"===a.type?b*=6:Z[a.type]&&(b*=2),b):0}function r(){k.clear(k.COLOR_BUFFER_BIT|k.DEPTH_BUFFER_BIT)}function n(a,b){function f(a){a&&(b.colorData.push(a[0]),b.colorData.push(a[1]),b.colorData.push(a[2]),b.colorData.push(a[3]))}function d(a,b,d,c,k){f(k);z.usePreallocated?J.push(a,b,d?1:0,c||1):(L.push(a),L.push(b),L.push(d?1:0),L.push(c||1))}function k(){b.segments.length&&(b.segments[b.segments.length-1].to=L.length)}function p(){b.segments.length&&b.segments[b.segments.length-
1].from===L.length||(k(),b.segments.push({from:L.length}))}function e(a,b,c,k,p){f(p);d(a+c,b);f(p);d(a,b);f(p);d(a,b+k);f(p);d(a,b+k);f(p);d(a+c,b+k);f(p);d(a+c,b)}function g(a,f){z.useGPUTranslations||(b.skipTranslation=!0,a.x=y.toPixels(a.x,!0),a.y=w.toPixels(a.y,!0));f?L=[a.x,a.y,0,2].concat(L):d(a.x,a.y,0,2)}var r=a.pointArrayMap&&"low,high"===a.pointArrayMap.join(","),O=a.chart,G=a.options,v=!!G.stacking,h=G.data,n=a.xAxis.getExtremes(),l=n.min,n=n.max,I=a.yAxis.getExtremes(),u=I.min,I=I.max,
q=a.xData||G.xData||a.processedXData,R=a.yData||G.yData||a.processedYData,S=a.zData||G.zData||a.processedZData,w=a.yAxis,y=a.xAxis,K=a.chart.plotWidth,t=!q||0===q.length,H=G.connectNulls,x=a.points||!1,C=!1,D=!1,B,E,Q,h=v?a.data:q||h,q={x:Number.MAX_VALUE,y:0},N={x:-Number.MAX_VALUE,y:0},X=0,Y=!1,A,P,F=-1,U=!1,V=!1,aa,ta="undefined"===typeof O.index,ia=!1,ja=!1,M=!1,wa=Z[a.type],ka=!1,qa=!0,ra=!0,ba=G.zones||!1,W=!1,sa=G.threshold;if(!(G.boostData&&0<G.boostData.length)){ba&&(m(ba,function(a){if("undefined"===
typeof a.value)return W=c.Color(a.color),!0}),W||(W=a.pointAttribs&&a.pointAttribs().fill||a.color,W=c.Color(W)));O.inverted&&(K=a.chart.plotHeight);a.closestPointRangePx=Number.MAX_VALUE;p();if(x&&0<x.length)b.skipTranslation=!0,b.drawMode="triangles",x[0].node&&x[0].node.levelDynamic&&x.sort(function(a,b){if(a.node){if(a.node.levelDynamic>b.node.levelDynamic)return 1;if(a.node.levelDynamic<b.node.levelDynamic)return-1}return 0}),x.forEach(function(b){var f=b.plotY,d;"undefined"===typeof f||isNaN(f)||
null===b.y||(f=b.shapeArgs,d=O.styledMode?b.series.colorAttribs(b):d=b.series.pointAttribs(b),b=d["stroke-width"]||0,E=c.color(d.fill).rgba,E[0]/=255,E[1]/=255,E[2]/=255,"treemap"===a.type&&(b=b||1,Q=c.color(d.stroke).rgba,Q[0]/=255,Q[1]/=255,Q[2]/=255,e(f.x,f.y,f.width,f.height,Q),b/=2),"heatmap"===a.type&&O.inverted&&(f.x=y.len-f.x,f.y=w.len-f.y,f.width=-f.width,f.height=-f.height),e(f.x+b,f.y+b,f.width-2*b,f.height-2*b,E))});else{for(;F<h.length-1;){B=h[++F];if(ta)break;t?(x=B[0],A=B[1],h[F+1]&&
(V=h[F+1][0]),h[F-1]&&(U=h[F-1][0]),3<=B.length&&(P=B[2],B[2]>b.zMax&&(b.zMax=B[2]),B[2]<b.zMin&&(b.zMin=B[2]))):(x=B,A=R[F],h[F+1]&&(V=h[F+1]),h[F-1]&&(U=h[F-1]),S&&S.length&&(P=S[F],S[F]>b.zMax&&(b.zMax=S[F]),S[F]<b.zMin&&(b.zMin=S[F])));if(H||null!==x&&null!==A){if(V&&V>=l&&V<=n&&(ia=!0),U&&U>=l&&U<=n&&(ja=!0),r?(t&&(A=B.slice(1,3)),aa=A[0],A=A[1]):v&&(x=B.x,A=B.stackY,aa=A-B.y),null!==u&&"undefined"!==typeof u&&null!==I&&"undefined"!==typeof I&&(qa=A>=u&&A<=I),x>n&&N.x<n&&(N.x=x,N.y=A),x<l&&q.x>
l&&(q.x=x,q.y=A),null!==A||!H)if(null!==A&&(qa||ia||ja)){if((V>=l||x>=l)&&(U<=n||x<=n)&&(ka=!0),ka||ia||ja){ba&&(M=W.rgba,m(ba,function(a,b){b=ba[b-1];if("undefined"!==typeof a.value&&A<=a.value){if(!b||A>=b.value)M=c.color(a.color).rgba;return!0}}),M[0]/=255,M[1]/=255,M[2]/=255);if(!z.useGPUTranslations&&(b.skipTranslation=!0,x=y.toPixels(x,!0),A=w.toPixels(A,!0),x>K&&"points"===b.drawMode))continue;if(wa){B=aa;if(!1===aa||"undefined"===typeof aa)B=0>A?A:0;r||v||(B=Math.max(null===sa?u:sa,u));z.useGPUTranslations||
(B=w.toPixels(B,!0));d(x,B,0,0,M)}b.hasMarkers&&ka&&!1!==C&&(a.closestPointRangePx=Math.min(a.closestPointRangePx,Math.abs(x-C)));!z.useGPUTranslations&&!z.usePreallocated&&C&&1>Math.abs(x-C)&&D&&1>Math.abs(A-D)?z.debug.showSkipSummary&&++X:(G.step&&!ra&&d(x,D,0,2,M),d(x,A,0,"bubble"===a.type?P||1:2,M),C=x,D=A,Y=!0,ra=!1)}}else p()}else p()}z.debug.showSkipSummary&&console.log("skipped points:",X);Y||!1===H||"line_strip"!==a.drawMode||(q.x<Number.MAX_VALUE&&g(q,!0),N.x>-Number.MAX_VALUE&&g(N))}k()}}
function d(){C=[];X.data=L=[];Y=[];J&&J.destroy()}function p(a){b&&(b.setUniform("xAxisTrans",a.transA),b.setUniform("xAxisMin",a.min),b.setUniform("xAxisMinPad",a.minPixelPadding),b.setUniform("xAxisPointRange",a.pointRange),b.setUniform("xAxisLen",a.len),b.setUniform("xAxisPos",a.pos),b.setUniform("xAxisCVSCoord",!a.horiz),b.setUniform("xAxisIsLog",a.isLog),b.setUniform("xAxisReversed",!!a.reversed))}function f(a){b&&(b.setUniform("yAxisTrans",a.transA),b.setUniform("yAxisMin",a.min),b.setUniform("yAxisMinPad",
a.minPixelPadding),b.setUniform("yAxisPointRange",a.pointRange),b.setUniform("yAxisLen",a.len),b.setUniform("yAxisPos",a.pos),b.setUniform("yAxisCVSCoord",!a.horiz),b.setUniform("yAxisIsLog",a.isLog),b.setUniform("yAxisReversed",!!a.reversed))}function I(a,f){b.setUniform("hasThreshold",a);b.setUniform("translatedThreshold",f)}function v(e){if(e)H=e.chartWidth||800,y=e.chartHeight||400;else return!1;if(!(k&&H&&y&&b))return!1;z.debug.timeRendering&&console.time("gl rendering");k.canvas.width=H;k.canvas.height=
y;b.bind();k.viewport(0,0,H,y);b.setPMatrix([2/H,0,0,0,0,-(2/y),0,0,0,0,-2,0,-1,1,-1,1]);1<z.lineWidth&&!c.isMS&&k.lineWidth(z.lineWidth);J.build(X.data,"aVertexPosition",4);J.bind();b.setInverted(e.inverted);C.forEach(function(d,r){var h=d.series.options,n=h.marker,v;v="undefined"!==typeof h.lineWidth?h.lineWidth:1;var m=h.threshold,O=l(m),u=d.series.yAxis.getThreshold(m),m=q(h.marker?h.marker.enabled:null,d.series.xAxis.isRadial?!0:null,d.series.closestPointRangePx>2*((h.marker?h.marker.radius:
10)||10)),n=E[n&&n.symbol||d.series.symbol]||E.circle;if(!(0===d.segments.length||d.segmentslength&&d.segments[0].from===d.segments[0].to)){n.isReady&&(k.bindTexture(k.TEXTURE_2D,n.handle),b.setTexture(n.handle));e.styledMode?n=d.series.markerGroup&&d.series.markerGroup.getStyle("fill"):(n=d.series.pointAttribs&&d.series.pointAttribs().fill||d.series.color,h.colorByPoint&&(n=d.series.chart.options.colors[r]));d.series.fillOpacity&&h.fillOpacity&&(n=(new a(n)).setOpacity(q(h.fillOpacity,1)).get());
n=c.color(n).rgba;z.useAlpha||(n[3]=1);"lines"===d.drawMode&&z.useAlpha&&1>n[3]&&(n[3]/=10);"add"===h.boostBlending?(k.blendFunc(k.SRC_ALPHA,k.ONE),k.blendEquation(k.FUNC_ADD)):"mult"===h.boostBlending||"multiply"===h.boostBlending?k.blendFunc(k.DST_COLOR,k.ZERO):"darken"===h.boostBlending?(k.blendFunc(k.ONE,k.ONE),k.blendEquation(k.FUNC_MIN)):k.blendFuncSeparate(k.SRC_ALPHA,k.ONE_MINUS_SRC_ALPHA,k.ONE,k.ONE_MINUS_SRC_ALPHA);b.reset();0<d.colorData.length&&(b.setUniform("hasColor",1),r=g(k,b),r.build(d.colorData,
"aColor",4),r.bind());b.setColor(n);p(d.series.xAxis);f(d.series.yAxis);I(O,u);"points"===d.drawMode&&(h.marker&&h.marker.radius?b.setPointSize(2*h.marker.radius):b.setPointSize(1));b.setSkipTranslation(d.skipTranslation);"bubble"===d.series.type&&b.setBubbleUniforms(d.series,d.zMin,d.zMax);b.setDrawAsCircle(P[d.series.type]||!1);if(0<v||"line_strip"!==d.drawMode)for(v=0;v<d.segments.length;v++)J.render(d.segments[v].from,d.segments[v].to,d.drawMode);if(d.hasMarkers&&m)for(h.marker&&h.marker.radius?
b.setPointSize(2*h.marker.radius):b.setPointSize(10),b.setDrawAsCircle(!0),v=0;v<d.segments.length;v++)J.render(d.segments[v].from,d.segments[v].to,"POINTS")}});z.debug.timeRendering&&console.timeEnd("gl rendering");K&&K();d()}function R(a){r();if(a.renderer.forExport)return v(a);N?v(a):setTimeout(function(){R(a)},1)}var b=!1,J=!1,k=!1,H=0,y=0,L=!1,Y=!1,X={},N=!1,C=[],E={},Z={column:!0,columnrange:!0,bar:!0,area:!0,arearange:!0},P={scatter:!0,bubble:!0},z={pointSize:1,lineWidth:1,fillColor:"#AA00AA",
useAlpha:!0,usePreallocated:!1,useGPUTranslations:!1,debug:{timeRendering:!1,timeSeriesProcessing:!1,timeSetup:!1,timeBufferCopy:!1,timeKDTree:!1,showSkipSummary:!1}};return X={allocateBufferForSingleSeries:function(a){var b=0;z.usePreallocated&&(a.isSeriesBoosting&&(b=t(a)),J.allocate(b))},pushSeries:function(a){0<C.length&&C[C.length-1].hasMarkers&&(C[C.length-1].markerTo=Y.length);z.debug.timeSeriesProcessing&&console.time("building "+a.type+" series");C.push({segments:[],markerFrom:Y.length,colorData:[],
series:a,zMin:Number.MAX_VALUE,zMax:-Number.MAX_VALUE,hasMarkers:a.options.marker?!1!==a.options.marker.enabled:!1,showMarkers:!0,drawMode:{area:"lines",arearange:"lines",areaspline:"line_strip",column:"lines",columnrange:"lines",bar:"lines",line:"line_strip",scatter:"points",heatmap:"triangles",treemap:"triangles",bubble:"points"}[a.type]||"line_strip"});n(a,C[C.length-1]);z.debug.timeSeriesProcessing&&console.timeEnd("building "+a.type+" series")},setSize:function(a,d){H===a&&y===d||!b||(H=a,y=
d,b.bind(),b.setPMatrix([2/H,0,0,0,0,-(2/y),0,0,0,0,-2,0,-1,1,-1,1]))},inited:function(){return N},setThreshold:I,init:function(a,f){function c(a,b){var d={isReady:!1,texture:u.createElement("canvas"),handle:k.createTexture()},f=d.texture.getContext("2d");E[a]=d;d.texture.width=512;d.texture.height=512;f.mozImageSmoothingEnabled=!1;f.webkitImageSmoothingEnabled=!1;f.msImageSmoothingEnabled=!1;f.imageSmoothingEnabled=!1;f.strokeStyle="rgba(255, 255, 255, 0)";f.fillStyle="#FFF";b(f);try{k.activeTexture(k.TEXTURE0),
k.bindTexture(k.TEXTURE_2D,d.handle),k.texImage2D(k.TEXTURE_2D,0,k.RGBA,k.RGBA,k.UNSIGNED_BYTE,d.texture),k.texParameteri(k.TEXTURE_2D,k.TEXTURE_WRAP_S,k.CLAMP_TO_EDGE),k.texParameteri(k.TEXTURE_2D,k.TEXTURE_WRAP_T,k.CLAMP_TO_EDGE),k.texParameteri(k.TEXTURE_2D,k.TEXTURE_MAG_FILTER,k.LINEAR),k.texParameteri(k.TEXTURE_2D,k.TEXTURE_MIN_FILTER,k.LINEAR),k.bindTexture(k.TEXTURE_2D,null),d.isReady=!0}catch(ca){}}var p=0,h=["webgl","experimental-webgl","moz-webgl","webkit-3d"];N=!1;if(!a)return!1;for(z.debug.timeSetup&&
console.time("gl setup");p<h.length&&!(k=a.getContext(h[p],{}));p++);if(k)f||d();else return!1;k.enable(k.BLEND);k.blendFunc(k.SRC_ALPHA,k.ONE_MINUS_SRC_ALPHA);k.disable(k.DEPTH_TEST);k.depthFunc(k.LESS);b=e(k);if(!b)return!1;J=g(k,b);c("circle",function(a){a.beginPath();a.arc(256,256,256,0,2*Math.PI);a.stroke();a.fill()});c("square",function(a){a.fillRect(0,0,512,512)});c("diamond",function(a){a.beginPath();a.moveTo(256,0);a.lineTo(512,256);a.lineTo(256,512);a.lineTo(0,256);a.lineTo(256,0);a.fill()});
c("triangle",function(a){a.beginPath();a.moveTo(0,512);a.lineTo(256,0);a.lineTo(512,512);a.lineTo(0,512);a.fill()});c("triangle-down",function(a){a.beginPath();a.moveTo(0,0);a.lineTo(256,512);a.lineTo(512,0);a.lineTo(0,0);a.fill()});N=!0;z.debug.timeSetup&&console.timeEnd("gl setup");return!0},render:R,settings:z,valid:function(){return!1!==k},clear:r,flush:d,setXAxis:p,setYAxis:f,data:L,gl:function(){return k},allocateBuffer:function(a){var b=0;z.usePreallocated&&(a.series.forEach(function(a){a.isSeriesBoosting&&
(b+=t(a))}),J.allocate(b))},destroy:function(){d();J.destroy();b.destroy();k&&(w(E,function(a){E[a].handle&&k.deleteTexture(E[a].handle)}),k.canvas.width=1,k.canvas.height=1)},setOptions:function(a){h(!0,z,a)}}}});t(g,"modules/boost/boost-attach.js",[g["parts/Globals.js"],g["modules/boost/wgl-renderer.js"]],function(e,g){var c=e.win.document,u=c.createElement("canvas");return function(h,w){var l=h.chartWidth,m=h.chartHeight,a=h,q=h.seriesGroup||w.group,y=c.implementation.hasFeature("www.http://w3.org/TR/SVG11/feature#Extensibility",
"1.1"),a=h.isChartSeriesBoosting()?h:w,y=!1;a.renderTarget||(a.canvas=u,h.renderer.forExport||!y?(a.renderTarget=h.renderer.image("",0,0,l,m).addClass("highcharts-boost-canvas").add(q),a.boostClear=function(){a.renderTarget.attr({href:""})},a.boostCopy=function(){a.boostResizeTarget();a.renderTarget.attr({href:a.canvas.toDataURL("image/png")})}):(a.renderTargetFo=h.renderer.createElement("foreignObject").add(q),a.renderTarget=c.createElement("canvas"),a.renderTargetCtx=a.renderTarget.getContext("2d"),
a.renderTargetFo.element.appendChild(a.renderTarget),a.boostClear=function(){a.renderTarget.width=a.canvas.width;a.renderTarget.height=a.canvas.height},a.boostCopy=function(){a.renderTarget.width=a.canvas.width;a.renderTarget.height=a.canvas.height;a.renderTargetCtx.drawImage(a.canvas,0,0)}),a.boostResizeTarget=function(){l=h.chartWidth;m=h.chartHeight;(a.renderTargetFo||a.renderTarget).attr({x:0,y:0,width:l,height:m}).css({pointerEvents:"none",mixedBlendMode:"normal",opacity:1});a instanceof e.Chart&&
a.markerGroup.translate(h.plotLeft,h.plotTop)},a.boostClipRect=h.renderer.clipRect(),(a.renderTargetFo||a.renderTarget).clip(a.boostClipRect),a instanceof e.Chart&&(a.markerGroup=a.renderer.g().add(q),a.markerGroup.translate(w.xAxis.pos,w.yAxis.pos)));a.canvas.width=l;a.canvas.height=m;a.boostClipRect.attr(h.getBoostClipRect(a));a.boostResizeTarget();a.boostClear();a.ogl||(a.ogl=g(function(){a.ogl.settings.debug.timeBufferCopy&&console.time("buffer copy");a.boostCopy();a.ogl.settings.debug.timeBufferCopy&&
console.timeEnd("buffer copy")}),a.ogl.init(a.canvas)||e.error("[highcharts boost] - unable to init WebGL renderer"),a.ogl.setOptions(h.options.boost||{}),a instanceof e.Chart&&a.ogl.allocateBuffer(h));a.ogl.setSize(l,m);return a.ogl}});t(g,"modules/boost/boost-utils.js",[g["parts/Globals.js"],g["modules/boost/boostable-map.js"],g["modules/boost/boost-attach.js"]],function(e,g,c){function u(){var a=Array.prototype.slice.call(arguments),c=-Number.MAX_VALUE;a.forEach(function(a){if("undefined"!==typeof a&&
null!==a&&"undefined"!==typeof a.length&&0<a.length)return c=a.length,!0});return c}function h(a,c,d){a&&c.renderTarget&&c.canvas&&!(d||c.chart).isChartSeriesBoosting()&&a.render(d||c.chart)}function w(a,c){a&&c.renderTarget&&c.canvas&&!c.chart.isChartSeriesBoosting()&&a.allocateBufferForSingleSeries(c)}function l(c,h,d,p,f,e){f=f||0;p=p||3E3;for(var g=f+p,r=!0;r&&f<g&&f<c.length;)r=h(c[f],f),++f;r&&(f<c.length?e?l(c,h,d,p,f,e):a.requestAnimationFrame?a.requestAnimationFrame(function(){l(c,h,d,p,
f)}):setTimeout(function(){l(c,h,d,p,f)}):d&&d())}function m(){var c=0,h,d=["webgl","experimental-webgl","moz-webgl","webkit-3d"],p=!1;if("undefined"!==typeof a.WebGLRenderingContext)for(h=q.createElement("canvas");c<d.length;c++)try{if(p=h.getContext(d[c]),"undefined"!==typeof p&&null!==p)return!0}catch(f){}return!1}var a=e.win,q=a.document,t=e.pick,D={patientMax:u,boostEnabled:function(a){return t(a&&a.options&&a.options.boost&&a.options.boost.enabled,!0)},shouldForceChartSeriesBoosting:function(a){var c=
0,d=0,h=t(a.options.boost&&a.options.boost.allowForce,!0),f;if("undefined"!==typeof a.boostForceChartBoost)return a.boostForceChartBoost;if(1<a.series.length)for(var e=0;e<a.series.length;e++)f=a.series[e],0!==f.options.boostThreshold&&!1!==f.visible&&"heatmap"!==f.type&&(g[f.type]&&++d,u(f.processedXData,f.options.data,f.points)>=(f.options.boostThreshold||Number.MAX_VALUE)&&++c);a.boostForceChartBoost=h&&(d===a.series.length&&0<c||5<c);return a.boostForceChartBoost},renderIfNotSeriesBoosting:h,
allocateIfNotSeriesBoosting:w,eachAsync:l,hasWebGLSupport:m,pointDrawHandler:function(a){var e=!0;this.chart.options&&this.chart.options.boost&&(e="undefined"===typeof this.chart.options.boost.enabled?!0:this.chart.options.boost.enabled);if(!e||!this.isSeriesBoosting)return a.call(this);this.chart.isBoosting=!0;if(a=c(this.chart,this))w(a,this),a.pushSeries(this);h(a,this)}};e.hasWebGLSupport=m;return D});t(g,"modules/boost/boost-init.js",[g["parts/Globals.js"],g["modules/boost/boost-utils.js"],g["modules/boost/boost-attach.js"]],
function(e,g,c){var u=e.addEvent,h=e.fireEvent,w=e.extend,l=e.Series,m=e.seriesTypes,a=e.wrap,q=function(){},t=g.eachAsync,D=g.pointDrawHandler,r=g.allocateIfNotSeriesBoosting,n=g.renderIfNotSeriesBoosting,d=g.shouldForceChartSeriesBoosting,p;return function(){e.extend(l.prototype,{renderCanvas:function(){function a(a,b){var d,f,c=!1,e="undefined"===typeof l.index,h=!0;if(!e&&(oa?(d=a[0],f=a[1]):(d=a,f=w[b]),la?(oa&&(f=a.slice(1,3)),c=f[0],f=f[1]):ma&&(d=a.x,f=a.stackY,c=f-a.y),ua||(h=f>=C&&f<=E),
null!==f&&d>=D&&d<=K&&h))if(a=k.toPixels(d,!0),z){if(void 0===T||a===P){la||(c=f);if(void 0===da||f>ca)ca=f,da=b;if(void 0===T||c<fa)fa=c,T=b}a!==P&&(void 0!==T&&(f=m.toPixels(ca,!0),ea=m.toPixels(fa,!0),ha(a,f,da),ea!==f&&ha(a,ea,T)),T=da=void 0,P=a)}else f=Math.ceil(m.toPixels(f,!0)),ha(a,f,b);return!e}function d(){h(e,"renderedCanvas");delete e.buildKDTree;e.buildKDTree();ga.debug.timeKDTree&&console.timeEnd("kd tree building")}var e=this,g=e.options||{},b=!1,l=e.chart,k=this.xAxis,m=this.yAxis,
u=g.xData||e.processedXData,w=g.yData||e.processedYData,y=g.data,b=k.getExtremes(),D=b.min,K=b.max,b=m.getExtremes(),C=b.min,E=b.max,Z={},P,z=!!e.sampling,O,G=!1!==g.enableMouseTracking,ea=m.getThreshold(g.threshold),la=e.pointArrayMap&&"low,high"===e.pointArrayMap.join(","),ma=!!g.stacking,na=e.cropStart||0,ua=e.requireSorting,oa=!u,fa,ca,T,da,ga,va="x"===g.findNearestPointBy,pa=this.xData||this.options.xData||this.processedXData||!1,ha=function(a,b,f){a=Math.ceil(a);p=va?a:a+","+b;G&&!Z[p]&&(Z[p]=
!0,l.inverted&&(a=k.len-a,b=m.len-b),O.push({x:pa?pa[na+f]:!1,clientX:a,plotX:a,plotY:b,i:na+f}))},b=c(l,e);l.isBoosting=!0;ga=b.settings;if(this.visible){if(this.points||this.graph)this.animate=null,this.destroyGraphics();l.isChartSeriesBoosting()?(this.markerGroup=l.markerGroup,this.renderTarget&&(this.renderTarget=this.renderTarget.destroy())):this.markerGroup=e.plotGroup("markerGroup","markers",!0,1,l.seriesGroup);O=this.points=[];e.buildKDTree=q;b&&(r(b,this),b.pushSeries(e),n(b,this,l));l.renderer.forExport||
(ga.debug.timeKDTree&&console.time("kd tree building"),t(ma?e.data:u||y,a,d))}}});["heatmap","treemap"].forEach(function(f){m[f]&&a(m[f].prototype,"drawPoints",D)});m.bubble&&(delete m.bubble.prototype.buildKDTree,a(m.bubble.prototype,"markerAttribs",function(a){return this.isSeriesBoosting?!1:a.apply(this,[].slice.call(arguments,1))}));m.scatter.prototype.fill=!0;w(m.area.prototype,{fill:!0,fillOpacity:!0,sampling:!0});w(m.column.prototype,{fill:!0,sampling:!0});e.Chart.prototype.callbacks.push(function(a){u(a,
"predraw",function(){a.boostForceChartBoost=void 0;a.boostForceChartBoost=d(a);a.isBoosting=!1;!a.isChartSeriesBoosting()&&a.didBoost&&(a.didBoost=!1);a.boostClear&&a.boostClear();a.canvas&&a.ogl&&a.isChartSeriesBoosting()&&(a.didBoost=!0,a.ogl.allocateBuffer(a));a.markerGroup&&a.xAxis&&0<a.xAxis.length&&a.yAxis&&0<a.yAxis.length&&a.markerGroup.translate(a.xAxis[0].pos,a.yAxis[0].pos)});u(a,"render",function(){a.ogl&&a.isChartSeriesBoosting()&&a.ogl.render(a)})})}});t(g,"modules/boost/boost-overrides.js",
[g["parts/Globals.js"],g["modules/boost/boost-utils.js"],g["modules/boost/boostables.js"],g["modules/boost/boostable-map.js"]],function(e,g,c,t){var h=g.boostEnabled,u=g.shouldForceChartSeriesBoosting;g=e.Chart;var l=e.Series,m=e.Point,a=e.seriesTypes,q=e.addEvent,y=e.isNumber,D=e.pick,r=e.wrap,n=e.getOptions().plotOptions;g.prototype.isChartSeriesBoosting=function(){return D(this.options.boost&&this.options.boost.seriesThreshold,50)<=this.series.length||u(this)};g.prototype.getBoostClipRect=function(a){var d=
{x:this.plotLeft,y:this.plotTop,width:this.plotWidth,height:this.plotHeight};a===this&&this.yAxis.forEach(function(a){d.y=Math.min(a.pos,d.y);d.height=Math.max(a.pos-this.plotTop+a.len,d.height)},this);return d};l.prototype.getPoint=function(a){var d=a,c=this.xData||this.options.xData||this.processedXData||!1;!a||a instanceof this.pointClass||(d=(new this.pointClass).init(this,this.options.data[a.i],c?c[a.i]:void 0),d.category=D(this.xAxis.categories?this.xAxis.categories[d.x]:d.x,d.x),d.dist=a.dist,
d.distX=a.distX,d.plotX=a.plotX,d.plotY=a.plotY,d.index=a.i);return d};r(l.prototype,"searchPoint",function(a){return this.getPoint(a.apply(this,[].slice.call(arguments,1)))});r(m.prototype,"haloPath",function(a){var d,c=this.series,e=this.plotX,h=this.plotY,g=c.chart.inverted;c.isSeriesBoosting&&g&&(this.plotX=c.yAxis.len-h,this.plotY=c.xAxis.len-e);d=a.apply(this,Array.prototype.slice.call(arguments,1));c.isSeriesBoosting&&g&&(this.plotX=e,this.plotY=h);return d});r(l.prototype,"markerAttribs",
function(a,c){var d,e=c.plotX,h=c.plotY,g=this.chart.inverted;this.isSeriesBoosting&&g&&(c.plotX=this.yAxis.len-h,c.plotY=this.xAxis.len-e);d=a.apply(this,Array.prototype.slice.call(arguments,1));this.isSeriesBoosting&&g&&(c.plotX=e,c.plotY=h);return d});q(l,"destroy",function(){var a=this,c=a.chart;c.markerGroup===a.markerGroup&&(a.markerGroup=null);c.hoverPoints&&(c.hoverPoints=c.hoverPoints.filter(function(c){return c.series===a}));c.hoverPoint&&c.hoverPoint.series===a&&(c.hoverPoint=null)});r(l.prototype,
"getExtremes",function(a){if(!this.isSeriesBoosting||!this.hasExtremes||!this.hasExtremes())return a.apply(this,Array.prototype.slice.call(arguments,1))});["translate","generatePoints","drawTracker","drawPoints","render"].forEach(function(c){function d(a){var d=this.options.stacking&&("translate"===c||"generatePoints"===c);if(!this.isSeriesBoosting||d||!h(this.chart)||"heatmap"===this.type||"treemap"===this.type||!t[this.type]||0===this.options.boostThreshold)a.call(this);else if(this[c+"Canvas"])this[c+
"Canvas"]()}r(l.prototype,c,d);"translate"===c&&"column bar arearange columnrange heatmap treemap".split(" ").forEach(function(f){a[f]&&r(a[f].prototype,c,d)})});r(l.prototype,"processData",function(a){function c(a){return d.chart.isChartSeriesBoosting()||(a?a.length:0)>=(d.options.boostThreshold||Number.MAX_VALUE)}var d=this,e=this.options.data;h(this.chart)&&t[this.type]?(c(e)&&"heatmap"!==this.type&&"treemap"!==this.type&&!this.options.stacking&&this.hasExtremes&&this.hasExtremes(!0)||(a.apply(this,
Array.prototype.slice.call(arguments,1)),e=this.processedXData),(this.isSeriesBoosting=c(e))?this.enterBoost():this.exitBoost&&this.exitBoost()):a.apply(this,Array.prototype.slice.call(arguments,1))});q(l,"hide",function(){this.canvas&&this.renderTarget&&(this.ogl&&this.ogl.clear(),this.boostClear())});l.prototype.enterBoost=function(){this.alteredByBoost=[];["allowDG","directTouch","stickyTracking"].forEach(function(a){this.alteredByBoost.push({prop:a,val:this[a],own:this.hasOwnProperty(a)})},this);
this.directTouch=this.allowDG=!1;this.stickyTracking=!0;this.animate=null;this.labelBySeries&&(this.labelBySeries=this.labelBySeries.destroy())};l.prototype.exitBoost=function(){(this.alteredByBoost||[]).forEach(function(a){a.own?this[a.prop]=a.val:delete this[a.prop]},this);this.boostClear&&this.boostClear()};l.prototype.hasExtremes=function(a){var c=this.options,d=this.xAxis&&this.xAxis.options,e=this.yAxis&&this.yAxis.options;return c.data.length>(c.boostThreshold||Number.MAX_VALUE)&&y(e.min)&&
y(e.max)&&(!a||y(d.min)&&y(d.max))};l.prototype.destroyGraphics=function(){var a=this,c=this.points,e,h;if(c)for(h=0;h<c.length;h+=1)(e=c[h])&&e.destroyElements&&e.destroyElements();["graph","area","tracker"].forEach(function(c){a[c]&&(a[c]=a[c].destroy())})};c.forEach(function(c){n[c]&&(n[c].boostThreshold=5E3,n[c].boostData=[],a[c].prototype.fillOpacity=!0)})});t(g,"modules/boost/named-colors.js",[g["parts/Globals.js"]],function(e){var g={aliceblue:"#f0f8ff",antiquewhite:"#faebd7",aqua:"#00ffff",
aquamarine:"#7fffd4",azure:"#f0ffff",beige:"#f5f5dc",bisque:"#ffe4c4",black:"#000000",blanchedalmond:"#ffebcd",blue:"#0000ff",blueviolet:"#8a2be2",brown:"#a52a2a",burlywood:"#deb887",cadetblue:"#5f9ea0",chartreuse:"#7fff00",chocolate:"#d2691e",coral:"#ff7f50",cornflowerblue:"#6495ed",cornsilk:"#fff8dc",crimson:"#dc143c",cyan:"#00ffff",darkblue:"#00008b",darkcyan:"#008b8b",darkgoldenrod:"#b8860b",darkgray:"#a9a9a9",darkgreen:"#006400",darkkhaki:"#bdb76b",darkmagenta:"#8b008b",darkolivegreen:"#556b2f",
darkorange:"#ff8c00",darkorchid:"#9932cc",darkred:"#8b0000",darksalmon:"#e9967a",darkseagreen:"#8fbc8f",darkslateblue:"#483d8b",darkslategray:"#2f4f4f",darkturquoise:"#00ced1",darkviolet:"#9400d3",deeppink:"#ff1493",deepskyblue:"#00bfff",dimgray:"#696969",dodgerblue:"#1e90ff",feldspar:"#d19275",firebrick:"#b22222",floralwhite:"#fffaf0",forestgreen:"#228b22",fuchsia:"#ff00ff",gainsboro:"#dcdcdc",ghostwhite:"#f8f8ff",gold:"#ffd700",goldenrod:"#daa520",gray:"#808080",green:"#008000",greenyellow:"#adff2f",
honeydew:"#f0fff0",hotpink:"#ff69b4",indianred:"#cd5c5c",indigo:"#4b0082",ivory:"#fffff0",khaki:"#f0e68c",lavender:"#e6e6fa",lavenderblush:"#fff0f5",lawngreen:"#7cfc00",lemonchiffon:"#fffacd",lightblue:"#add8e6",lightcoral:"#f08080",lightcyan:"#e0ffff",lightgoldenrodyellow:"#fafad2",lightgrey:"#d3d3d3",lightgreen:"#90ee90",lightpink:"#ffb6c1",lightsalmon:"#ffa07a",lightseagreen:"#20b2aa",lightskyblue:"#87cefa",lightslateblue:"#8470ff",lightslategray:"#778899",lightsteelblue:"#b0c4de",lightyellow:"#ffffe0",
lime:"#00ff00",limegreen:"#32cd32",linen:"#faf0e6",magenta:"#ff00ff",maroon:"#800000",mediumaquamarine:"#66cdaa",mediumblue:"#0000cd",mediumorchid:"#ba55d3",mediumpurple:"#9370d8",mediumseagreen:"#3cb371",mediumslateblue:"#7b68ee",mediumspringgreen:"#00fa9a",mediumturquoise:"#48d1cc",mediumvioletred:"#c71585",midnightblue:"#191970",mintcream:"#f5fffa",mistyrose:"#ffe4e1",moccasin:"#ffe4b5",navajowhite:"#ffdead",navy:"#000080",oldlace:"#fdf5e6",olive:"#808000",olivedrab:"#6b8e23",orange:"#ffa500",
orangered:"#ff4500",orchid:"#da70d6",palegoldenrod:"#eee8aa",palegreen:"#98fb98",paleturquoise:"#afeeee",palevioletred:"#d87093",papayawhip:"#ffefd5",peachpuff:"#ffdab9",peru:"#cd853f",pink:"#ffc0cb",plum:"#dda0dd",powderblue:"#b0e0e6",purple:"#800080",red:"#ff0000",rosybrown:"#bc8f8f",royalblue:"#4169e1",saddlebrown:"#8b4513",salmon:"#fa8072",sandybrown:"#f4a460",seagreen:"#2e8b57",seashell:"#fff5ee",sienna:"#a0522d",silver:"#c0c0c0",skyblue:"#87ceeb",slateblue:"#6a5acd",slategray:"#708090",snow:"#fffafa",
springgreen:"#00ff7f",steelblue:"#4682b4",tan:"#d2b48c",teal:"#008080",thistle:"#d8bfd8",tomato:"#ff6347",turquoise:"#40e0d0",violet:"#ee82ee",violetred:"#d02090",wheat:"#f5deb3",white:"#ffffff",whitesmoke:"#f5f5f5",yellow:"#ffff00",yellowgreen:"#9acd32"};return e.Color.prototype.names=g});t(g,"modules/boost/boost.js",[g["parts/Globals.js"],g["modules/boost/boost-utils.js"],g["modules/boost/boost-init.js"]],function(e,g,c){g=g.hasWebGLSupport;g()?c():"undefined"!==typeof e.initCanvasBoost?e.initCanvasBoost():
e.error(26)});t(g,"masters/modules/boost.src.js",[],function(){})});
//# sourceMappingURL=boost.js.map
