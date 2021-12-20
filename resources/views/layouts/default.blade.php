<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- NAVBAR BEGINS --}}
<nav class="border-b border-gray-400">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex flex-col md:flex-row items-center md:space-x-10 md:ml-24 lg:flex">
                    <li>
                        <a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Product</a>
                    </li>
                    <li>
                        <a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Features</a>
                    </li>
                    <li>
                        <a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Pricing</a>
                    </li>
                </ul>
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-purple-600 md:ml-2" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Property Experts</span>
                </a>
                <ul class="flex flex-col md:flex-row items-center md:space-x-10">
                    <li>
                        <a href="/" aria-label="About" title="About" class="mt-3 md:mt-0 font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">About</a>
                    </li>
                    <li>
                        <a href="/" aria-label="Sign in" title="Sign in" class="mt-3 md:mt-0 font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-600">Sign in</a>
                    </li>
                    <li>
                        <a href="/" aria-label="Sign up" title="Sign up" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-700 hover:bg-purple-800 focus:shadow-outline focus:outline-none">Sign up</a>
                    </li>
                </ul>
                <livewire:search-dropdown>
            </div>
        </nav>
{{-- NAVBAR ENDS --}}

@yield('content')

{{-- FOOTER BEGINS --}}
        <div class="relative mt-16 bg-purple-800">
  <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-purple-800" preserveAspectRatio="none" viewBox="0 0 1440 54">
    <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
  </svg>
  <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
      <div class="md:max-w-md lg:col-span-2">
        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
          <svg class="w-8 text-teal-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
            <rect x="3" y="1" width="7" height="12"></rect>
            <rect x="3" y="17" width="7" height="6"></rect>
            <rect x="14" y="1" width="7" height="6"></rect>
            <rect x="14" y="11" width="7" height="12"></rect>
          </svg>
          <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Property Experts</span>
        </a>
        <div class="mt-4 lg:max-w-sm">
          <p class="text-sm text-purple-50">
            This project was built with Laravel and MySQL.
          </p>
          <p class="mt-4 text-sm text-purple-50">
            You can read more about this project by clicking the "About" link in the navigation
          </p>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
        <div>
          <p class="font-semibold tracking-wide text-teal-400">
            Category
          </p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">News</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">World</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Games</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">References</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold tracking-wide text-teal-400">Cherry</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Web</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">eCommerce</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Business</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Entertainment</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Portfolio</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold tracking-wide text-teal-400">Apples</p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Media</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Brochure</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Nonprofit</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Educational</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Projects</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold tracking-wide text-teal-400">
            Business
          </p>
          <ul class="mt-2 space-y-2">
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Infopreneur</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Personal</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Wiki</a>
            </li>
            <li>
              <a href="/" class="transition-colors duration-300 text-purple-50 hover:text-teal-400">Forum</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t border-purple-200 sm:flex-row">
      <p class="text-sm text-gray-100">
        © Copyright 2021 Muhammed Sultan. All rights reserved.
      </p>
      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        <a href="https://github.com/MuhammedSultan1" class="transition-colors duration-300 text-purple-100 hover:text-teal-400">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="48" height="48"
        viewBox="0 0 48 48"
        style=" fill:#000000;"><linearGradient id="rL2wppHyxHVbobwndsT6Ca_AZOZNnY73haj_gr1" x1="4" x2="44" y1="23.508" y2="23.508" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4c4c4c"></stop><stop offset="1" stop-color="#343434"></stop></linearGradient><path fill="url(#rL2wppHyxHVbobwndsT6Ca_AZOZNnY73haj_gr1)" d="M24,4C12.954,4,4,12.954,4,24c0,8.887,5.801,16.411,13.82,19.016h12.36	C38.199,40.411,44,32.887,44,24C44,12.954,35.046,4,24,4z"></path><path d="M30.01,41.996L30,36.198c0-0.939-0.22-1.856-0.642-2.687c5.641-1.133,8.386-4.468,8.386-10.177	c0-2.255-0.665-4.246-1.976-5.92c0.1-0.317,0.174-0.645,0.22-0.981c0.188-1.369-0.023-2.264-0.193-2.984l-0.027-0.116	c-0.186-0.796-0.409-1.364-0.418-1.388l-0.111-0.282l-0.111-0.282l-0.302-0.032l-0.303-0.032c0,0-0.199-0.021-0.501-0.021	c-0.419,0-1.04,0.042-1.627,0.241l-0.196,0.066c-0.74,0.249-1.439,0.485-2.417,1.069c-0.286,0.171-0.599,0.366-0.934,0.584	C27.334,12.881,25.705,12.69,24,12.69c-1.722,0-3.365,0.192-4.889,0.571c-0.339-0.22-0.654-0.417-0.942-0.589	c-0.978-0.584-1.677-0.819-2.417-1.069l-0.196-0.066c-0.585-0.199-1.207-0.241-1.626-0.241c-0.302,0-0.501,0.021-0.501,0.021	l-0.302,0.032l-0.3,0.031l-0.112,0.281l-0.113,0.283c-0.01,0.026-0.233,0.594-0.419,1.391l-0.027,0.115	c-0.17,0.719-0.381,1.615-0.193,2.983c0.048,0.346,0.125,0.685,0.23,1.011c-1.285,1.666-1.936,3.646-1.936,5.89	c0,5.695,2.748,9.028,8.397,10.17c-0.194,0.388-0.345,0.798-0.452,1.224c-0.197,0.067-0.378,0.112-0.538,0.137	c-0.238,0.036-0.487,0.054-0.739,0.054c-0.686,0-1.225-0.134-1.435-0.259c-0.313-0.186-0.872-0.727-1.414-1.518	c-0.463-0.675-1.185-1.558-1.992-1.927c-0.698-0.319-1.437-0.502-2.029-0.502c-0.138,0-0.265,0.01-0.376,0.028	c-0.517,0.082-0.949,0.366-1.184,0.78c-0.203,0.357-0.235,0.773-0.088,1.141c0.219,0.548,0.851,0.985,1.343,1.255	c0.242,0.133,0.765,0.619,1.07,1.109c0.229,0.368,0.335,0.63,0.482,0.992c0.087,0.215,0.183,0.449,0.313,0.732	c0.47,1.022,1.937,1.924,2.103,2.023c0.806,0.483,2.161,0.638,3.157,0.683l0.123,0.003c0,0,0.001,0,0.001,0	c0.24,0,0.57-0.023,1.004-0.071v2.613c0.002,0.529-0.537,0.649-1.25,0.638l0.547,0.184C19.395,43.572,21.645,44,24,44	c2.355,0,4.605-0.428,6.703-1.176l0.703-0.262C30.695,42.538,30.016,42.422,30.01,41.996z" opacity=".05"></path><path d="M30.781,42.797c-0.406,0.047-1.281-0.109-1.281-0.795v-5.804c0-1.094-0.328-2.151-0.936-3.052	c5.915-0.957,8.679-4.093,8.679-9.812c0-2.237-0.686-4.194-2.039-5.822c0.137-0.365,0.233-0.75,0.288-1.147	c0.175-1.276-0.016-2.086-0.184-2.801l-0.027-0.116c-0.178-0.761-0.388-1.297-0.397-1.319l-0.111-0.282l-0.303-0.032	c0,0-0.178-0.019-0.449-0.019c-0.381,0-0.944,0.037-1.466,0.215l-0.196,0.066c-0.714,0.241-1.389,0.468-2.321,1.024	c-0.332,0.198-0.702,0.431-1.101,0.694C27.404,13.394,25.745,13.19,24,13.19c-1.762,0-3.435,0.205-4.979,0.61	c-0.403-0.265-0.775-0.499-1.109-0.699c-0.932-0.556-1.607-0.784-2.321-1.024l-0.196-0.066c-0.521-0.177-1.085-0.215-1.466-0.215	c-0.271,0-0.449,0.019-0.449,0.019l-0.302,0.032l-0.113,0.283c-0.009,0.022-0.219,0.558-0.397,1.319l-0.027,0.116	c-0.169,0.715-0.36,1.524-0.184,2.8c0.056,0.407,0.156,0.801,0.298,1.174c-1.327,1.62-1.999,3.567-1.999,5.795	c0,5.703,2.766,8.838,8.686,9.806c-0.395,0.59-0.671,1.255-0.813,1.964c-0.33,0.13-0.629,0.216-0.891,0.256	c-0.263,0.04-0.537,0.06-0.814,0.06c-0.69,0-1.353-0.129-1.69-0.329c-0.44-0.261-1.057-0.914-1.572-1.665	c-0.35-0.51-1.047-1.417-1.788-1.755c-0.635-0.29-1.298-0.457-1.821-0.457c-0.11,0-0.21,0.008-0.298,0.022	c-0.366,0.058-0.668,0.252-0.828,0.534c-0.128,0.224-0.149,0.483-0.059,0.708c0.179,0.448,0.842,0.85,1.119,1.002	c0.335,0.184,0.919,0.744,1.254,1.284c0.251,0.404,0.37,0.697,0.521,1.067c0.085,0.209,0.178,0.437,0.304,0.712	c0.331,0.719,1.353,1.472,1.905,1.803c0.754,0.452,2.154,0.578,2.922,0.612l0.111,0.002c0.299,0,0.8-0.045,1.495-0.135v3.177	c0,0.779-0.991,0.81-1.234,0.81c-0.031,0,0.503,0.184,0.503,0.184C19.731,43.64,21.822,44,24,44c2.178,0,4.269-0.36,6.231-1.003	C30.231,42.997,30.812,42.793,30.781,42.797z" opacity=".07"></path><path fill="#fff" d="M36.744,23.334c0-2.31-0.782-4.226-2.117-5.728c0.145-0.325,0.296-0.761,0.371-1.309	c0.172-1.25-0.031-2-0.203-2.734s-0.375-1.25-0.375-1.25s-0.922-0.094-1.703,0.172s-1.453,0.469-2.422,1.047	c-0.453,0.27-0.909,0.566-1.27,0.806C27.482,13.91,25.785,13.69,24,13.69c-1.801,0-3.513,0.221-5.067,0.652	c-0.362-0.241-0.821-0.539-1.277-0.811c-0.969-0.578-1.641-0.781-2.422-1.047s-1.703-0.172-1.703-0.172s-0.203,0.516-0.375,1.25	s-0.375,1.484-0.203,2.734c0.077,0.562,0.233,1.006,0.382,1.333c-1.31,1.493-2.078,3.397-2.078,5.704	c0,5.983,3.232,8.714,9.121,9.435c-0.687,0.726-1.148,1.656-1.303,2.691c-0.387,0.17-0.833,0.33-1.262,0.394	c-1.104,0.167-2.271,0-2.833-0.333s-1.229-1.083-1.729-1.813c-0.422-0.616-1.031-1.331-1.583-1.583	c-0.729-0.333-1.438-0.458-1.833-0.396c-0.396,0.063-0.583,0.354-0.5,0.563c0.083,0.208,0.479,0.521,0.896,0.75	c0.417,0.229,1.063,0.854,1.438,1.458c0.418,0.674,0.5,1.063,0.854,1.833c0.249,0.542,1.101,1.219,1.708,1.583	c0.521,0.313,1.562,0.491,2.688,0.542c0.389,0.018,1.308-0.096,2.083-0.206v3.75c0,0.639-0.585,1.125-1.191,1.013	C19.756,43.668,21.833,44,24,44c2.166,0,4.243-0.332,6.19-0.984C29.585,43.127,29,42.641,29,42.002v-5.804	c0-1.329-0.527-2.53-1.373-3.425C33.473,32.071,36.744,29.405,36.744,23.334z M11.239,32.727c-0.154-0.079-0.237-0.225-0.185-0.328	c0.052-0.103,0.22-0.122,0.374-0.043c0.154,0.079,0.237,0.225,0.185,0.328S11.393,32.806,11.239,32.727z M12.451,33.482	c-0.081,0.088-0.255,0.06-0.389-0.062s-0.177-0.293-0.096-0.381c0.081-0.088,0.255-0.06,0.389,0.062S12.532,33.394,12.451,33.482z M13.205,34.732c-0.102,0.072-0.275,0.005-0.386-0.15s-0.118-0.34-0.016-0.412s0.275-0.005,0.386,0.15	C13.299,34.475,13.307,34.66,13.205,34.732z M14.288,35.673c-0.069,0.112-0.265,0.117-0.437,0.012s-0.256-0.281-0.187-0.393	c0.069-0.112,0.265-0.117,0.437-0.012S14.357,35.561,14.288,35.673z M15.312,36.594c-0.213-0.026-0.371-0.159-0.353-0.297	c0.017-0.138,0.204-0.228,0.416-0.202c0.213,0.026,0.371,0.159,0.353,0.297C15.711,36.529,15.525,36.62,15.312,36.594z M16.963,36.833c-0.227-0.013-0.404-0.143-0.395-0.289c0.009-0.146,0.2-0.255,0.427-0.242c0.227,0.013,0.404,0.143,0.395,0.289	C17.381,36.738,17.19,36.846,16.963,36.833z M18.521,36.677c-0.242,0-0.438-0.126-0.438-0.281s0.196-0.281,0.438-0.281	c0.242,0,0.438,0.126,0.438,0.281S18.762,36.677,18.521,36.677z"></path>
            </svg>
        </a>
      </div>
    </div>
  </div>
</div>
{{-- FOOTER ENDS --}}
</body>
</html>