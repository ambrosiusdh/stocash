new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'line-chart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
        { month: '2008 01', nonFb: 125 , sembako: 110, makanan: 300, minuman: 420},
        { month: '2009 02', nonFb: 121 , sembako: 130, makanan: 287, minuman: 480},
        { month: '2010 03', nonFb: 143 , sembako: 130, makanan: 310, minuman: 450},
        { month: '2011 04', nonFb: 122 , sembako: 151, makanan: 333, minuman: 444},
        { month: '2012 05', nonFb: 111 , sembako: 99, makanan: 360, minuman: 490}
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'month',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['nonFb', 'sembako', 'makanan', 'minuman'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: [],
    xLabels: "month",
    hideHover: "always",
    lineColors: ['blue', 'red', 'orange', 'green']
});
