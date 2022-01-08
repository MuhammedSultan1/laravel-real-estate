// mapboxgl.accessToken =
//     "pk.eyJ1IjoibXJzd2VldHMiLCJhIjoiY2t4Y3VqcjNqMWQyeTJ3cGZhMHN6N3F2dyJ9.qf4Ckg7Y8JtW9HzpGRiVOA";
// const map = new mapboxgl.Map({
//     container: "map", // container ID
//     style: "mapbox://styles/mapbox/streets-v11", // style URL
//     center: [-74.5, 40], // starting position [lng, lat]
//     zoom: 9, // starting zoom
// });
// // Set options
// var marker = new mapboxgl.Marker({
//     color: "#fa6060",
//     draggable: false,
// })
//     .setLngLat([30.20159, -81.81561])
//     .addTo(map);

// fetch(
//     "https://realty-in-us.p.rapidapi.com/properties/list-for-sale?state_code=NY&city=New%20York%20City&offset=0&limit=200&sort=relevance",
//     {
//         method: "GET",
//         headers: {
//             "x-rapidapi-host": "realty-in-us.p.rapidapi.com",
//             "x-rapidapi-key": env("RAPID_API_KEY"),
//         },
//     }
// )
//     .then((response) => {
//         console.log(response);
//     })
//     .catch((err) => {
//         console.error(err);
//     });

// const accessToken = env("JAWG_KEY");
// const map = new maplibregl.Map({
//     container: "map",
//     style: `https://api.jawg.io/styles/jawg-terrain.json?access-token=${accessToken}`,
//     zoom: 11,
//     center: [2.349902, 48.852966],
// }).addControl(new maplibregl.NavigationControl(), "top-right");
// // This plugin is used for right to left languages
// maplibregl.setRTLTextPlugin(
//     "https://unpkg.com/@mapbox/mapbox-gl-rtl-text@0.2.3/mapbox-gl-rtl-text.min.js"
// );

// // This add a marker with the default icon
// new maplibregl.Marker().setLngLat([2.349902, 48.852966]).addTo(map);
// // Marker with custom icon
// const el = document.createElement("div");
// el.className = "marker";
// new maplibregl.Marker(el).setLngLat([2.294694, 48.858093]).addTo(map);
