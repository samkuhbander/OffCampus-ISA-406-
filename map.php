<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Off Campus</title>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">OffCampus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="map.php">Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listings.php">Listings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="companies.php">Companies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addProperty.php">Add Property</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button>
      </form>
    </div>
  </nav>
</head>
<!DOCTYPE html>
<html>
  <head>
    <title>Locator</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://www.gstatic.com/external_hosted/handlebars/v4.7.6/handlebars.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
      html,
body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map-container {
        width: 100%;
        height: 100%;
        position: relative;
        font-family: "Roboto", sans-serif;
        box-sizing: border-box;
      }

      #map-container button {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        font-size: inherit;
        cursor: pointer;
      }

      #map {
        position: absolute;
        left: 22em;
        top: 0;
        right: 0;
        bottom: 0;
      }

      #locations-panel {
        position: absolute;
        left: 0;
        width: 22em;
        top: 0;
        bottom: 0;
        overflow-y: auto;
        background: white;
        padding: 0.5em;
        box-sizing: border-box;
      }

      @media only screen and (max-width: 876px) {
        #map {
          left: 0;
          bottom: 50%;
        }

        #locations-panel {
          top: 50%;
          right: 0;
          width: unset;
        }
      }

      #locations-panel-list > header {
        padding: 1.4em 1.4em 0 1.4em;
      }

      #locations-panel-list h1.search-title {
        font-size: 1em;
        font-weight: 500;
        margin: 0;
      }

      #locations-panel-list h1.search-title > img {
        vertical-align: bottom;
        margin-top: -1em;
      }

      #locations-panel-list .search-input {
        width: 100%;
        margin-top: 0.8em;
        position: relative;
      }

      #locations-panel-list .search-input input {
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3em;
        height: 2.2em;
        box-sizing: border-box;
        padding: 0 2.5em 0 1em;
        font-size: 1em;
      }

      #locations-panel-list .search-input-overlay {
        position: absolute;
      }

      #locations-panel-list .search-input-overlay.search {
        right: 2px;
        top: 2px;
        bottom: 2px;
        width: 2.4em;
      }

      #locations-panel-list .search-input-overlay.search button {
        width: 100%;
        height: 100%;
        border-radius: 0.2em;
        color: black;
        background: transparent;
      }

      #locations-panel-list .search-input-overlay.search .icon {
        margin-top: 0.05em;
        vertical-align: top;
      }

      #locations-panel-list .section-name {
        font-weight: 500;
        font-size: 0.9em;
        margin: 1.8em 0 1em 1.5em;
      }

      #locations-panel-list .location-result {
        position: relative;
        padding: 0.8em 3.5em 0.8em 1.4em;
        border-bottom: 1px solid rgba(0, 0, 0, 0.12);
        cursor: pointer;
      }

      #locations-panel-list .location-result:first-of-type {
        border-top: 1px solid rgba(0, 0, 0, 0.12);
      }

      #locations-panel-list .location-result:last-of-type {
        border-bottom: none;
      }

      #locations-panel-list .location-result.selected {
        outline: 2px solid #4285f4;
      }

      #locations-panel-list button.select-location {
        margin-bottom: 0.6em;
        text-align: left;
      }

      #locations-panel-list .location-result h2.name {
        font-size: 1em;
        font-weight: 500;
        margin: 0;
      }

      #locations-panel-list .location-result .address {
        font-size: 0.9em;
        margin-bottom: 0.5em;
      }

      #locations-panel-list .location-result .distance {
        position: absolute;
        top: 0.9em;
        right: 0;
        text-align: center;
        font-size: 0.9em;
        width: 5em;
      }

      #location-results-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      'use strict';

      /**
       * Defines an instance of the Locator+ solution, to be instantiated
       * when the Maps library is loaded.
       */
      function LocatorPlus(configuration) {
        const locator = this;

        locator.locations = configuration.locations || [];
        locator.capabilities = configuration.capabilities || {};

        const mapEl = document.getElementById('map');
        const panelEl = document.getElementById('locations-panel');
        locator.panelListEl = document.getElementById('locations-panel-list');
        const sectionNameEl =
            document.getElementById('location-results-section-name');
        const resultsContainerEl = document.getElementById('location-results-list');

        const itemsTemplate = Handlebars.compile(
            document.getElementById('locator-result-items-tmpl').innerHTML);

        locator.searchLocation = null;
        locator.searchLocationMarker = null;
        locator.selectedLocationIdx = null;
        locator.userCountry = null;

        // Initialize the map -------------------------------------------------------
        locator.map = new google.maps.Map(mapEl, configuration.mapOptions);

        // Store selection.
        const selectResultItem = function(locationIdx, panToMarker, scrollToResult) {
          locator.selectedLocationIdx = locationIdx;
          for (let locationElem of resultsContainerEl.children) {
            locationElem.classList.remove('selected');
            if (getResultIndex(locationElem) === locator.selectedLocationIdx) {
              locationElem.classList.add('selected');
              if (scrollToResult) {
                panelEl.scrollTop = locationElem.offsetTop;
              }
            }
          }
          if (panToMarker && (locationIdx != null)) {
            locator.map.panTo(locator.locations[locationIdx].coords);
          }
        };

        // Create a marker for each location.
        const markers = locator.locations.map(function(location, index) {
          const marker = new google.maps.Marker({
            position: location.coords,
            map: locator.map,
            title: location.title,
          });
          marker.addListener('click', function() {
            selectResultItem(index, false, true);
          });
          return marker;
        });

        // Fit map to marker bounds.
        locator.updateBounds = function() {
          const bounds = new google.maps.LatLngBounds();
          if (locator.searchLocationMarker) {
            bounds.extend(locator.searchLocationMarker.getPosition());
          }
          for (let i = 0; i < markers.length; i++) {
            bounds.extend(markers[i].getPosition());
          }
          locator.map.fitBounds(bounds);
        };
        if (locator.locations.length) {
          locator.updateBounds();
        }

        // Get the distance of a store location to the user's location,
        // used in sorting the list.
        const getLocationDistance = function(location) {
          if (!locator.searchLocation) return null;

          // Use travel distance if available (from Distance Matrix).
          if (location.travelDistanceValue != null) {
            return location.travelDistanceValue;
          }

          // Fall back to straight-line distance.
          return google.maps.geometry.spherical.computeDistanceBetween(
              new google.maps.LatLng(location.coords),
              locator.searchLocation.location);
        };

        // Render the results list --------------------------------------------------
        const getResultIndex = function(elem) {
          return parseInt(elem.getAttribute('data-location-index'));
        };

        locator.renderResultsList = function() {
          let locations = locator.locations.slice();
          for (let i = 0; i < locations.length; i++) {
            locations[i].index = i;
          }
          if (locator.searchLocation) {
            sectionNameEl.textContent =
                'Nearest locations (' + locations.length + ')';
            locations.sort(function(a, b) {
              return getLocationDistance(a) - getLocationDistance(b);
            });
          } else {
            sectionNameEl.textContent = `All locations (${locations.length})`;
          }
          const resultItemContext = { locations: locations };
          resultsContainerEl.innerHTML = itemsTemplate(resultItemContext);
          for (let item of resultsContainerEl.children) {
            const resultIndex = getResultIndex(item);
            if (resultIndex === locator.selectedLocationIdx) {
              item.classList.add('selected');
            }

            const resultSelectionHandler = function() {
              selectResultItem(resultIndex, true, false);
            };

            // Clicking anywhere on the item selects this location.
            // Additionally, create a button element to make this behavior
            // accessible under tab navigation.
            item.addEventListener('click', resultSelectionHandler);
            item.querySelector('.select-location')
                .addEventListener('click', function(e) {
                  resultSelectionHandler();
                  e.stopPropagation();
                });
          }
        };

        // Optional capability initialization --------------------------------------
        initializeSearchInput(locator);
        initializeDistanceMatrix(locator);

        // Initial render of results -----------------------------------------------
        locator.renderResultsList();
      }

      /** When the search input capability is enabled, initialize it. */
      function initializeSearchInput(locator) {
        const geocodeCache = new Map();
        const geocoder = new google.maps.Geocoder();

        const searchInputEl = document.getElementById('location-search-input');
        const searchButtonEl = document.getElementById('location-search-button');

        const updateSearchLocation = function(address, location) {
          if (locator.searchLocationMarker) {
            locator.searchLocationMarker.setMap(null);
          }
          if (!location) {
            locator.searchLocation = null;
            return;
          }
          locator.searchLocation = {'address': address, 'location': location};
          locator.searchLocationMarker = new google.maps.Marker({
            position: location,
            map: locator.map,
            title: 'My location',
            icon: {
              path: google.maps.SymbolPath.CIRCLE,
              scale: 12,
              fillColor: '#3367D6',
              fillOpacity: 0.5,
              strokeOpacity: 0,
            }
          });

          // Update the locator's idea of the user's country, used for units. Use
          // `formatted_address` instead of the more structured `address_components`
          // to avoid an additional billed call.
          const addressParts = address.split(' ');
          locator.userCountry = addressParts[addressParts.length - 1];

          // Update map bounds to include the new location marker.
          locator.updateBounds();

          // Update the result list so we can sort it by proximity.
          locator.renderResultsList();

          locator.updateTravelTimes();
        };

        const geocodeSearch = function(query) {
          if (!query) {
            return;
          }

          const handleResult = function(geocodeResult) {
            searchInputEl.value = geocodeResult.formatted_address;
            updateSearchLocation(
                geocodeResult.formatted_address, geocodeResult.geometry.location);
          };

          if (geocodeCache.has(query)) {
            handleResult(geocodeCache.get(query));
            return;
          }
          const request = {address: query, bounds: locator.map.getBounds()};
          geocoder.geocode(request, function(results, status) {
            if (status === 'OK') {
              if (results.length > 0) {
                const result = results[0];
                geocodeCache.set(query, result);
                handleResult(result);
              }
            }
          });
        };

        // Set up geocoding on the search input.
        searchButtonEl.addEventListener('click', function() {
          geocodeSearch(searchInputEl.value.trim());
        });

        // Initialize Autocomplete.
        initializeSearchInputAutocomplete(
            locator, searchInputEl, geocodeSearch, updateSearchLocation);
      }

      /** Add Autocomplete to the search input. */
      function initializeSearchInputAutocomplete(
          locator, searchInputEl, fallbackSearch, searchLocationUpdater) {
        // Set up Autocomplete on the search input. Bias results to map viewport.
        const autocomplete = new google.maps.places.Autocomplete(searchInputEl, {
          types: ['geocode'],
          fields: ['place_id', 'formatted_address', 'geometry.location']
        });
        autocomplete.bindTo('bounds', locator.map);
        autocomplete.addListener('place_changed', function() {
          const placeResult = autocomplete.getPlace();
          if (!placeResult.geometry) {
            // Hitting 'Enter' without selecting a suggestion will result in a
            // placeResult with only the text input value as the 'name' field.
            fallbackSearch(placeResult.name);
            return;
          }
          searchLocationUpdater(
              placeResult.formatted_address, placeResult.geometry.location);
        });
      }

      /** Initialize Distance Matrix for the locator. */
      function initializeDistanceMatrix(locator) {
        const distanceMatrixService = new google.maps.DistanceMatrixService();

        // Annotate travel times to the selected location using Distance Matrix.
        locator.updateTravelTimes = function() {
          if (!locator.searchLocation) return;

          const units = (locator.userCountry === 'USA') ?
              google.maps.UnitSystem.IMPERIAL :
              google.maps.UnitSystem.METRIC;
          const request = {
            origins: [locator.searchLocation.location],
            destinations: locator.locations.map(function(x) {
              return x.coords;
            }),
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: units,
          };
          const callback = function(response, status) {
            if (status === 'OK') {
              const distances = response.rows[0].elements;
              for (let i = 0; i < distances.length; i++) {
                const distResult = distances[i];
                let travelDistanceText, travelDistanceValue;
                if (distResult.status === 'OK') {
                  travelDistanceText = distResult.distance.text;
                  travelDistanceValue = distResult.distance.value;
                }
                const location = locator.locations[i];
                location.travelDistanceText = travelDistanceText;
                location.travelDistanceValue = travelDistanceValue;
              }

              // Re-render the results list, in case the ordering has changed.
              locator.renderResultsList();
            }
          };
          distanceMatrixService.getDistanceMatrix(request, callback);
        };
      }
    </script>
    <script>
      const CONFIGURATION = {
        "locations": [
          {"title":"313 N College Ave","address1":"313 N College Ave","address2":"Oxford, OH 45056, USA","coords":{"lat":39.51454669240484,"lng":-84.74519274907381},"placeId":"ChIJ-00l5Ww9QIgRPrVtslFC6LE"},
          {"title":"107 S Poplar St","address1":"107 S Poplar St","address2":"Oxford, OH 45056, USA","coords":{"lat":39.50906778979385,"lng":-84.74060722209016},"placeId":"EiYxMDcgUyBQb3BsYXIgU3QsIE94Zm9yZCwgT0ggNDUwNTYsIFVTQSJQEk4KNAoyCR27K5QNPUCIEb9uVscQG21aGh4LEO7B7qEBGhQKEgl1_MHKSzxAiBECBop1N6Fe_QwQayoUChIJwbE0OQ49QIgRPYoK0cGiBgc"},
          {"title":"205 W Sycamore St","address1":"205 W Sycamore St","address2":"Oxford, OH 45056, USA","coords":{"lat":39.514936615740794,"lng":-84.74576480674591},"placeId":"ChIJe8yB9Gw9QIgRu8irHnjTtsE"},
          {"title":"214 W Vine St","address1":"214 W Vine St","address2":"Oxford, OH 45056, USA","coords":{"lat":39.513831969046684,"lng":-84.74620612023773},"placeId":"ChIJqUTulWw9QIgREEBlW8lPzSE"}
        ],
        "mapOptions": {"center":{"lat":38.0,"lng":-100.0},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":false,"zoom":4,"zoomControl":true,"maxZoom":17},
        "mapsApiKey": "AIzaSyD9Ac2KEqrlf7sAy_ioSAL7QFxRoC4xzrY"
      };

      function initMap() {
        new LocatorPlus(CONFIGURATION);
      }
    </script>
    <script id="locator-result-items-tmpl" type="text/x-handlebars-template">
      {{#each locations}}
        <li class="location-result" data-location-index="{{index}}">
          <button class="select-location">
            <h2 class="name">{{title}}</h2>
          </button>
          <div class="address">{{address1}}<br>{{address2}}</div>
          {{#if travelDistanceText}}
            <div class="distance">{{travelDistanceText}}</div>
          {{/if}}
        </li>
      {{/each}}
    </script>
  </head>
  <body>
    <div id="map-container">
      <div id="locations-panel">
        <div id="locations-panel-list">
          <header>
            <h1 class="search-title">
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/place/v15/24px.svg"/>
              Find a location near you
            </h1>
            <div class="search-input">
              <input id="location-search-input" placeholder="Enter your address or zip code">
              <div id="search-overlay-search" class="search-input-overlay search">
                <button id="location-search-button">
                  <img class="icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/search/v11/24px.svg" alt="Search"/>
                </button>
              </div>
            </div>
          </header>
          <div class="section-name" id="location-results-section-name">
            All locations
          </div>
          <div class="results">
            <ul id="location-results-list"></ul>
          </div>
        </div>
      </div>
      <div id="map"></div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9Ac2KEqrlf7sAy_ioSAL7QFxRoC4xzrY&callback=initMap&libraries=places,geometry&channel=GMPSB_locatorplus_v4_cABD" async defer></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>