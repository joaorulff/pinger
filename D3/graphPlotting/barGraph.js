function plotBarGraph(dataSource){

	var y = d3.scale.linear()
			.domain([0,dataSource.length])
			.range([0,h]);


	var maxValueFromArray = d3.max(dataSource, function(dataSource){
		return dataSource.throughput;
	});

	var x = d3.scale.linear()
			.domain([0,maxValueFromArray])
			.range([0,w]);

	var svg = d3.select("body").append("svg")
				.attr("id", "chart")
				.attr("width", w)
				.attr("height", h);

	var chart = svg.append("g")
					.classed("display", true);

	chart.selectAll(".bar")
		.data(dataSource)
		.enter()
		.append("rect")
		.classed("bar", true)
		.attr("x", 0)
		.attr("y", function(data, index){
			return y(index);
		})
		.attr("width", function(data, index){
			return x(data.throughput);
		})
		.attr("height", y(1)-1);



	chart.selectAll(".bar-label")
		.data(dataSource)
		.enter()
		.append("text")
		.classed("bar-label", true)
		.attr("x", function(row, index){
			return x(row.throughput);
		})
		.attr("y" , function(row, index){
			return y(index);
		})
		.attr("dy", function(row, index){
			return y(1)/1.5 + 2; 	
		})
		.text(function(row, index){
			return row.country;
		});
}