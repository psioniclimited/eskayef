var USdata = {
        'AK': 'Alaska',
        'AL': '123',
        'AR': '7576',
        'AZ': '345',
        'CA': '453',
        'CO': '453',
        'CT': '765',
        'DC': '234',
        'DE': '35434',
        //'FL': 'Florida', Simulate a missing value defaults to 2 letter abbr
        'GA': '',
        'HI': '234',
        'IA': '234',
        'ID': 'Idaho',
        'IL': '234',
        'IN': '234',
        'KS': '234',
        'KY': '234',
        'LA': '234',
        'MA': '234',
        'MD': '7566',
        'ME': '567',
        'MI': '567',
        'MN': '46',
        'MO': '456',
        'MS': '567',
        'MT': '345',
        'NC': '456',
        'ND': '345',
        'NE': '65',
        'NH': '356',
        'NJ': '54',
        'NM': '4356',
        'NV': '5463',
        'NY': '3456',
        'OH': '2345',
        'OK': '2345',
        'OR': '564',
        'PA': '456',
        'RI': '234',
        'SC': '234',
        'SD': '5467',
        'TN': '5467',
        'TX': '2345',
        'UT': '345',
        'VA': '432',
        'VT': '654',
        'WA': '456',
        'WI': '543',
        'WV': '345',
        'WY': '1234'};


    var USdata_test = {
        
        };

    var USmap = new Datamap({
        element: document.getElementById("map-container"),
        scope: 'usa', //currently supports 'usa' and 'world', however with custom map data you can specify your own
        projection: 'equirectangular', //style of projection to be used. try "mercator"
        height: 520, //if not null, datamaps will grab the height of 'element'
        fills: {
            defaultFill: '#EDDC4E'
        },
        geographyConfig: {
            highlightBorderColor: '#bada55',
            popupTemplate: function (geography, data) {
                return '<div class="hoverinfo">' + geography.properties.name + '</div>';
            },
            highlightBorderWidth: 2
        }
    });
    USmap.labels({'customLabelText': 'here'});  