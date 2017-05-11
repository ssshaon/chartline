<script>
$(function(){
$.getJSON("/admin", function (result) {

var labels = [],data=[];
for (var i = 0; i < result.length; i++) {
labels.push(result[i].Temp);
data.push(result[i].temperatures);
}

var buyerData = {
labels : labels,
datasets : [
{
fillColor : "rgba(240, 127, 110, 0.3)",
strokeColor : "#f56954",
pointColor : "#A62121",
pointStrokeColor : "#741F1F",
data : data
}
]
};
var buyers = document.getElementById('temperatures-graph').getContext('2d');

new Chart(buyers).Line(buyerData, {
bezierCurve : true
});
});

});
</script>
<html>

<canvas id="temperatures-graph" width="1000" height="400"></canvas>


</html>
