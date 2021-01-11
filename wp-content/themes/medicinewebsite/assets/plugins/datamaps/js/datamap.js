var map = new Datamap({
        element: document.getElementById('map-container'),
        fills: {
            HIGH: '#afafaf',
            LOW: '#123456',
            MEDIUM: '#78473a',
            UNKNOWN: 'rgb(0,0,0)',
            defaultFill: '#C0C0C0'
        },
        data: {
            SWE: {
                fillKey: 'MEDIUM',
                numberOfThings: 10381
            },
            NOR: {
                fillKey: 'MEDIUM',
                numberOfThings: 10381
            },
            ESP: {
                fillKey: 'MEDIUM',
                numberOfThings: 10381
            },
            ITA: {
                fillKey: 'MEDIUM',
                numberOfThings: 10381
            }
        },
        geographyConfig: {
            popupTemplate: function(geo, data) {
                return ['<div class="hoverinfo"><strong>',
                        'Number of things in ' + geo.properties.name,
                        ': ' + data.numberOfThings,
                        '</strong></div>'].join('');
            }
        }
    });