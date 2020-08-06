<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.</p>
<!-- END_INFO -->
<h1>AboutUs</h1>
<p>Apis for AboutUs</p>
<!-- START_fcb2b1a91900847d4835cbb8a931d71d -->
<h2>Fetch AboutUs</h2>
<p>Fetch all AboutUs</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/about_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/about_us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "title": "About Us",
            "description": "About Us",
            "created_at": "2020-04-14T22:00:00.000000Z",
            "updated_at": "2020-04-14T22:00:00.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/about_us</code></p>
<!-- END_fcb2b1a91900847d4835cbb8a931d71d -->
<h1>Clients</h1>
<p>Apis for Clients</p>
<!-- START_1af1a947e16afcb5289fad8940c57ec5 -->
<h2>Fetch Clients</h2>
<p>Fetch all clients</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/clients?take=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/clients"
);

let params = {
    "take": "4",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "client name",
            "description": "client description",
            "image": "http:\/\/localhost:8000\/images\/default.jpg"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/clients</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>take</code></td>
<td>optional</td>
<td>Return spacifc number of clients.</td>
</tr>
</tbody>
</table>
<!-- END_1af1a947e16afcb5289fad8940c57ec5 -->
<!-- START_9176cc1be6ebc014d0f26db8772c607e -->
<h2>Fetch Client</h2>
<p>Fetch single client</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "name": "client name",
        "description": "client description",
        "image": "http:\/\/localhost:8000\/images\/default.jpg"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/clients/{client}</code></p>
<!-- END_9176cc1be6ebc014d0f26db8772c607e -->
<h1>Packages</h1>
<p>Apis for Packages</p>
<!-- START_c9db6d511dc413ffed938cbd76dd5af7 -->
<h2>Fetch Packages</h2>
<p>Fetch all packages</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/packages?take=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/packages"
);

let params = {
    "take": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Keaton Mann",
            "description": "Architecto qui vel eum consequatur repudiandae. Est dicta vero odio amet quos dignissimos iste aspernatur. Qui veniam aut et voluptatibus.",
            "price": 828,
            "slug": "cupiditate-et-ipsam-vitae-sed-minima-nesciunt"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/packages</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>take</code></td>
<td>optional</td>
<td>Return spacifc number of products.</td>
</tr>
</tbody>
</table>
<!-- END_c9db6d511dc413ffed938cbd76dd5af7 -->
<!-- START_095a4535fdef2cf04f25b9b83c3332a9 -->
<h2>Fetch Package</h2>
<p>Fetch single Package</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/packages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/packages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/packages/{package}</code></p>
<!-- END_095a4535fdef2cf04f25b9b83c3332a9 -->
<h1>Products</h1>
<p>Apis for Products</p>
<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
<h2>Fetch Products</h2>
<p>Fetch all products</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/products?take=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/products"
);

let params = {
    "take": "4",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "product name",
            "description": "product description",
            "slug": "product_slug",
            "image": "http:\/\/localhost:8000\/images\/default.jpg"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/products</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>take</code></td>
<td>optional</td>
<td>Return spacifc number of products.</td>
</tr>
</tbody>
</table>
<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
<!-- START_a285e63bc2d1a5b9428ae9aed745c779 -->
<h2>Fetch Product</h2>
<p>Fetch single product</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "name": "product name",
        "description": "product description",
        "slug": "product_slug",
        "images": [
            "http:\/\/localhost:8000\/images\/default.jpg"
        ],
        "seo": null
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/products/{product}</code></p>
<!-- END_a285e63bc2d1a5b9428ae9aed745c779 -->
<h1>Services</h1>
<p>Apis for Services</p>
<!-- START_ea84a78219560615c4ff37e1fa296629 -->
<h2>Fetch Services</h2>
<p>Fetch all Services</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/services?take=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/services"
);

let params = {
    "take": "4",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "service name",
            "description": "service description",
            "slug": "service_slug",
            "image": "http:\/\/localhost:8000\/images\/default.jpg"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/services</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>take</code></td>
<td>optional</td>
<td>Return spacifc number of services.</td>
</tr>
</tbody>
</table>
<!-- END_ea84a78219560615c4ff37e1fa296629 -->
<!-- START_801a92ef65179289ff8517eda2335be7 -->
<h2>Fetch Service</h2>
<p>Fetch single service</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/services/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/services/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "name": "service name",
        "description": "service description",
        "slug": "service_slug",
        "images": [
            "http:\/\/localhost:8000\/images\/default.jpg"
        ],
        "seo": null
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/services/{service}</code></p>
<!-- END_801a92ef65179289ff8517eda2335be7 -->
<h1>Settings</h1>
<p>Apis for Settings</p>
<!-- START_10633908636252dc838d3a5bd392f07c -->
<h2>Fetch Settings</h2>
<p>Fetch all settings</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "key": "setting key",
            "value": "setting value"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/settings</code></p>
<!-- END_10633908636252dc838d3a5bd392f07c -->
<!-- START_8cc4caf985da492764905dc92521c0e8 -->
<h2>Fetch Setting</h2>
<p>Fetch single setting</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "key": "setting key",
        "value": "setting value"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/settings/{setting}</code></p>
<!-- END_8cc4caf985da492764905dc92521c0e8 -->
<h1>Sliders</h1>
<p>Apis for Sliders</p>
<!-- START_308e5bdba1e46f769aeb4f7fff57a5ef -->
<h2>Fetch Sliders</h2>
<p>Fetch all Sliders</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/sliders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/sliders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/sliders</code></p>
<!-- END_308e5bdba1e46f769aeb4f7fff57a5ef -->
<!-- START_52e510b6029492ddbd3c79493f27248a -->
<h2>Fetch sliders</h2>
<p>Fetch single Slider</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://bw.kioncm.com/api/sliders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/sliders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/sliders/{slider}</code></p>
<!-- END_52e510b6029492ddbd3c79493f27248a -->
<h1>general</h1>
<!-- START_dc9b4acc1f14d46bcf299d3585bfc381 -->
<h2>api/subscribers</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://bw.kioncm.com/api/subscribers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/subscribers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/subscribers</code></p>
<!-- END_dc9b4acc1f14d46bcf299d3585bfc381 -->
<!-- START_44997a62c20073c574de58ec11255a50 -->
<h2>api/contact_us</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://bw.kioncm.com/api/contact_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/contact_us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/contact_us</code></p>
<!-- END_44997a62c20073c574de58ec11255a50 -->
<!-- START_9792377865465dfd12bebd73e7326925 -->
<h2>api/search</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://bw.kioncm.com/api/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://bw.kioncm.com/api/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/search</code></p>
<!-- END_9792377865465dfd12bebd73e7326925 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>