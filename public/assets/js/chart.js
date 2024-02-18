$(document).ready(function() {

	// Bar Chart
	
	Morris.Bar({
		element: 'bar-charts',
		data: [
			{ y: '2006', a: 100, b: 90, c: 10, d: 50},
			{ y: '2007', a: 100, b: 90, c: 10, d: 100},
			{ y: '2008', a: 10, b: 60, c: 10, d: 50},
			{ y: '2009', a: 100, b: 90, c: 100, d: 50},
			{ y: '2010', a: 70, b: 30, c: 10, d: 50},
		
		],
		xkey: 'y',
		ykeys: ['a', 'b','c','d'],
		labels: ['Total Fallos Vapor 1', 'Total Correctos Vapor 1','Total Fallos Vapor 2', 'Total Correctos Vapor 2'],
		lineColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		lineWidth: '3px',
		barColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		resize: true,
		redraw: true
	});
	
	// Line Chart
	
	Morris.Line({
		element: 'line-charts',
		data: [
			{ y: '2006', a: 100, b: 90, c: 10, d: 50},
			{ y: '2007', a: 100, b: 90, c: 10, d: 100},
			{ y: '2008', a: 10, b: 60, c: 10, d: 50},
			{ y: '2009', a: 100, b: 90, c: 100, d: 50},
			{ y: '2010', a: 70, b: 30, c: 10, d: 50},
		],
		xkey: 'y',
		ykeys: ['a', 'b','c','d'],
		labels: ['Total Fallos Vapor 1', 'Total Correctos Vapor 1','Total Fallos Vapor 2', 'Total Correctos Vapor 2'],
		lineColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		lineWidth: '3px',
		barColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});
	Morris.Bar({
		element: 'bar-charts2',
		data: [
			{ y: '2006', a: 10, b: 90, c: 10, d: 50},
			{ y: '2007', a: 10, b: 90, c: 10, d: 100},
			{ y: '2008', a: 10, b: 60, c: 10, d: 50},
			{ y: '2009', a: 10, b: 90, c: 10, d: 50},
			{ y: '2010', a: 70, b: 30, c: 10, d: 50},
		
		],
		xkey: 'y',
		ykeys: ['a', 'b','c','d'],
		labels: ['Total Fallos Vapor 1', 'Total Correctos Vapor 1','Total Fallos Vapor 2', 'Total Correctos Vapor 2'],
		lineColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		lineWidth: '3px',
		barColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		resize: true,
		redraw: true
	});
	
	// Line Chart
	
	Morris.Line({
		element: 'line-charts2',
		data: [
			{ y: '2006', a: 10, b: 90, c: 10, d: 50},
			{ y: '2007', a: 100, b: 90, c: 10, d: 100},
			{ y: '2008', a: 10, b: 60, c: 10, d: 50},
			{ y: '2009', a: 10, b: 90, c: 10, d: 50},
			{ y: '2010', a: 70, b: 30, c: 10, d: 50},
		],
		xkey: 'y',
		ykeys: ['a', 'b','c','d'],
		labels: ['Total Fallos Vapor 1', 'Total Correctos Vapor 1','Total Fallos Vapor 2', 'Total Correctos Vapor 2'],
		lineColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		lineWidth: '3px',
		barColors: ['#f43b48','#453a94','#e1bc16','#3ba453'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});
		
});