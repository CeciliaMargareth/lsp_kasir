// Graph 1
var options = {
	chart: {
		height: 100,
		width: 100,
		type: "area",
		zoom: {
			enabled: false,
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 7,
	},
	series: [
		{
			name: "Notifications",
			data: [80, 300, 300, 50, 150, 170, 550, 500],
		},
	],
	grid: {
		borderColor: "#bede68",
		strokeDashArray: 0,
		show: false,
		xaxis: {
			lines: {
				show: false,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: 0,
			right: 10,
			bottom: 0,
			left: 10,
		},
	},
	xaxis: {
		labels: {
			show: false,
		},
	},
	yaxis: {
		show: false,
	},
	fill: {
		type: "gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: 0.4,
			opacityTo: 0,
			stops: [15, 100],
		},
	},
	colors: ["#e93443"],
	markers: {
		size: 0,
		opacity: 0.2,
		colors: ["#e93443"],
		strokeColor: "#e93443",
		strokeWidth: 2,
		hover: {
			size: 10,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
};
var chart = new ApexCharts(document.querySelector("#notifications"), options);
chart.render();

// Graph 2
var options2 = {
	chart: {
		height: 100,
		width: 100,
		type: "area",
		zoom: {
			enabled: false,
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 7,
	},
	series: [
		{
			name: "Notifications",
			data: [80, 200, 300, 120, 60, 130, 450, 600],
		},
	],
	grid: {
		borderColor: "#bede68",
		strokeDashArray: 0,
		show: false,
		xaxis: {
			lines: {
				show: false,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: 0,
			right: 10,
			bottom: 0,
			left: 10,
		},
	},
	xaxis: {
		labels: {
			show: false,
		},
	},
	yaxis: {
		show: false,
	},
	fill: {
		type: "gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: 0.4,
			opacityTo: 0,
			stops: [15, 100],
		},
	},
	colors: ["#e93443"],
	markers: {
		size: 0,
		opacity: 0.2,
		colors: ["#e93443"],
		strokeColor: "#e93443",
		strokeWidth: 2,
		hover: {
			size: 10,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
};
var chart = new ApexCharts(document.querySelector("#visitors"), options2);
chart.render();

// Graph 3
var options3 = {
	chart: {
		height: 50,
		width: 130,
		type: "bar",
		zoom: {
			enabled: false,
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 5,
	},
	series: [
		{
			name: "Delivered",
			data: [30, 50, 100, 90, 80],
		},
	],
	grid: {
		borderColor: "#bede68",
		strokeDashArray: 0,
		show: false,
		xaxis: {
			lines: {
				show: false,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: -30,
			right: 10,
			bottom: -10,
			left: 10,
		},
	},
	xaxis: {
		labels: {
			show: false,
		},
	},
	yaxis: {
		show: false,
	},
	fill: {
		type: "gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: 0.4,
			opacityTo: 0,
			stops: [15, 100],
		},
	},
	colors: ["#f6bcc1"],
	markers: {
		size: 0,
		opacity: 0.2,
		colors: ["#f6bcc1"],
		strokeColor: "#f6bcc1",
		strokeWidth: 2,
		hover: {
			size: 10,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
};
var chart = new ApexCharts(document.querySelector("#delivered"), options3);
chart.render();

// Graph 4
var options4 = {
	chart: {
		height: 50,
		width: 130,
		type: "bar",
		zoom: {
			enabled: false,
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 5,
	},
	series: [
		{
			name: "Received",
			data: [30, 50, 100, 90, 80],
		},
	],
	grid: {
		borderColor: "#bede68",
		strokeDashArray: 0,
		show: false,
		xaxis: {
			lines: {
				show: false,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: -30,
			right: 10,
			bottom: -10,
			left: 10,
		},
	},
	xaxis: {
		labels: {
			show: false,
		},
	},
	yaxis: {
		show: false,
	},
	fill: {
		type: "gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: 0.4,
			opacityTo: 0,
			stops: [15, 100],
		},
	},
	colors: ["#e93443"],
	markers: {
		size: 0,
		opacity: 0.2,
		colors: ["#e93443"],
		strokeColor: "#e93443",
		strokeWidth: 2,
		hover: {
			size: 10,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
};
var chart = new ApexCharts(document.querySelector("#received"), options4);
chart.render();

// Graph 5
var options5 = {
	chart: {
		height: 50,
		width: 130,
		type: "bar",
		zoom: {
			enabled: false,
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 5,
	},
	series: [
		{
			name: "Processing",
			data: [30, 40, 80, 100, 90],
		},
	],
	grid: {
		borderColor: "#bede68",
		strokeDashArray: 0,
		show: false,
		xaxis: {
			lines: {
				show: false,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: -30,
			right: 10,
			bottom: -10,
			left: 10,
		},
	},
	xaxis: {
		labels: {
			show: false,
		},
	},
	yaxis: {
		show: false,
	},
	fill: {
		type: "gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: 0.4,
			opacityTo: 0,
			stops: [15, 100],
		},
	},
	colors: ["#f3737e"],
	markers: {
		size: 0,
		opacity: 0.2,
		colors: ["#f3737e"],
		strokeColor: "#f3737e",
		strokeWidth: 2,
		hover: {
			size: 10,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
};
var chart = new ApexCharts(document.querySelector("#processing"), options5);
chart.render();

// Graph 6
var options6 = {
	chart: {
		height: 50,
		width: 130,
		type: "bar",
		zoom: {
			enabled: false,
		},
		toolbar: {
			show: false,
		},
	},
	dataLabels: {
		enabled: false,
	},
	stroke: {
		curve: "smooth",
		width: 5,
	},
	series: [
		{
			name: "Processing",
			data: [30, 60, 120, 70, 90],
		},
	],
	grid: {
		borderColor: "#bede68",
		strokeDashArray: 0,
		show: false,
		xaxis: {
			lines: {
				show: false,
			},
		},
		yaxis: {
			lines: {
				show: false,
			},
		},
		padding: {
			top: -30,
			right: 10,
			bottom: -10,
			left: 10,
		},
	},
	xaxis: {
		labels: {
			show: false,
		},
	},
	yaxis: {
		show: false,
	},
	fill: {
		type: "gradient",
		gradient: {
			type: "vertical",
			shadeIntensity: 1,
			inverseColors: !1,
			opacityFrom: 0.4,
			opacityTo: 0,
			stops: [15, 100],
		},
	},
	colors: ["#f1505d"],
	markers: {
		size: 0,
		opacity: 0.2,
		colors: ["#f1505d"],
		strokeColor: "#f1505d",
		strokeWidth: 2,
		hover: {
			size: 10,
		},
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val;
			},
		},
	},
};
var chart = new ApexCharts(document.querySelector("#cancelled"), options6);
chart.render();
