var basic_choropleth = new Datamap({
  element: document.getElementById("map-container"),
  geographyConfig: {
    highlightOnHover: false
},
projection: 'mercator',
fills: {
    defaultFill: "#afafaf",
    authorHasTraveledTo: "#fa0fa0",
    fillWithThemeColor: "#2e8ece"
},
data: {
    DNK: { fillKey: "fillWithThemeColor" },
    GBR: { fillKey: "fillWithThemeColor" },
    NLD: { fillKey: "fillWithThemeColor" },
    AUS: { fillKey: "fillWithThemeColor" },
    FJI: { fillKey: "fillWithThemeColor" },
    DZA: { fillKey: "fillWithThemeColor" },
    KEN: { fillKey: "fillWithThemeColor" },
    MUS: { fillKey: "fillWithThemeColor" },
    SOM: { fillKey: "fillWithThemeColor" },
    TZA: { fillKey: "fillWithThemeColor" },
    UGA: { fillKey: "fillWithThemeColor" },
    AFG: { fillKey: "fillWithThemeColor" },
    BTN: { fillKey: "fillWithThemeColor" },
    HKG: { fillKey: "fillWithThemeColor" },
    IRN: { fillKey: "fillWithThemeColor" },
    JOR: { fillKey: "fillWithThemeColor" },
    LBN: { fillKey: "fillWithThemeColor" },
    MMR: { fillKey: "fillWithThemeColor" },
    NPL: { fillKey: "fillWithThemeColor" },
    PSE: { fillKey: "fillWithThemeColor" },
    PHL: { fillKey: "fillWithThemeColor" },
    LKA: { fillKey: "fillWithThemeColor" },
    SYR: { fillKey: "fillWithThemeColor" },
    UAE: { fillKey: "fillWithThemeColor" },
    VNM: { fillKey: "fillWithThemeColor" },
    YEM: { fillKey: "fillWithThemeColor" }
}
});

var colors = d3.scale.category10();

window.setInterval(function() {
  basic_choropleth.updateChoropleth({
    DNK: { fillKey: "fillWithThemeColor" },
    GBR: { fillKey: "fillWithThemeColor" },
    NLD: { fillKey: "fillWithThemeColor" },
    AUS: { fillKey: "fillWithThemeColor" },
    FJI: { fillKey: "fillWithThemeColor" },
    DZA: { fillKey: "fillWithThemeColor" },
    KEN: { fillKey: "fillWithThemeColor" },
    MUS: { fillKey: "fillWithThemeColor" },
    SOM: { fillKey: "fillWithThemeColor" },
    TZA: { fillKey: "fillWithThemeColor" },
    UGA: { fillKey: "fillWithThemeColor" },
    AFG: { fillKey: "fillWithThemeColor" },
    BTN: { fillKey: "fillWithThemeColor" },
    HKG: { fillKey: "fillWithThemeColor" },
    IRN: { fillKey: "fillWithThemeColor" },
    JOR: { fillKey: "fillWithThemeColor" },
    LBN: { fillKey: "fillWithThemeColor" },
    MMR: { fillKey: "fillWithThemeColor" },
    NPL: { fillKey: "fillWithThemeColor" },
    PSE: { fillKey: "fillWithThemeColor" },
    PHL: { fillKey: "fillWithThemeColor" },
    LKA: { fillKey: "fillWithThemeColor" },
    SYR: { fillKey: "fillWithThemeColor" },
    UAE: { fillKey: "fillWithThemeColor" },
    VNM: { fillKey: "fillWithThemeColor" },
    YEM: { fillKey: "fillWithThemeColor" }
});
}, 2000);


// newLabels = {'AUS':'Australia', 'DNK':'Denmark', 'USA' : ''};
// basic_choropleth.labels({"fontSize": 10, labelColor: "#222", "customLabelText": newLabels, "lineWidth" : 1});