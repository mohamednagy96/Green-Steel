---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.

<!-- END_INFO -->

#AboutUs


Apis for AboutUs
<!-- START_fcb2b1a91900847d4835cbb8a931d71d -->
## Fetch AboutUs

Fetch all AboutUs

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/about_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "title": "About Us",
            "description": "About Us",
            "created_at": "2020-04-14T22:00:00.000000Z",
            "updated_at": "2020-04-14T22:00:00.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/about_us`


<!-- END_fcb2b1a91900847d4835cbb8a931d71d -->

#Clients


Apis for Clients
<!-- START_1af1a947e16afcb5289fad8940c57ec5 -->
## Fetch Clients

Fetch all clients

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/clients?take=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://bw.kioncm.com/api/clients"
);

let params = {
    "take": "4",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "client name",
            "description": "client description",
            "image": "http:\/\/localhost:8000\/images\/default.jpg"
        }
    ]
}
```

### HTTP Request
`GET api/clients`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `take` |  optional  | Return spacifc number of clients.

<!-- END_1af1a947e16afcb5289fad8940c57ec5 -->

<!-- START_9176cc1be6ebc014d0f26db8772c607e -->
## Fetch Client

Fetch single client

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "client name",
        "description": "client description",
        "image": "http:\/\/localhost:8000\/images\/default.jpg"
    }
}
```

### HTTP Request
`GET api/clients/{client}`


<!-- END_9176cc1be6ebc014d0f26db8772c607e -->

#Packages


Apis for Packages
<!-- START_c9db6d511dc413ffed938cbd76dd5af7 -->
## Fetch Packages

Fetch all packages

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/packages?take=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://bw.kioncm.com/api/packages"
);

let params = {
    "take": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Keaton Mann",
            "description": "Architecto qui vel eum consequatur repudiandae. Est dicta vero odio amet quos dignissimos iste aspernatur. Qui veniam aut et voluptatibus.",
            "price": 828,
            "slug": "cupiditate-et-ipsam-vitae-sed-minima-nesciunt"
        }
    ]
}
```

### HTTP Request
`GET api/packages`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `take` |  optional  | Return spacifc number of products.

<!-- END_c9db6d511dc413ffed938cbd76dd5af7 -->

<!-- START_095a4535fdef2cf04f25b9b83c3332a9 -->
## Fetch Package

Fetch single Package

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/packages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/packages/{package}`


<!-- END_095a4535fdef2cf04f25b9b83c3332a9 -->

#Products


Apis for Products
<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
## Fetch Products

Fetch all products

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/products?take=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://bw.kioncm.com/api/products"
);

let params = {
    "take": "4",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "product name",
            "description": "product description",
            "slug": "product_slug",
            "image": "http:\/\/localhost:8000\/images\/default.jpg"
        }
    ]
}
```

### HTTP Request
`GET api/products`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `take` |  optional  | Return spacifc number of products.

<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->

<!-- START_a285e63bc2d1a5b9428ae9aed745c779 -->
## Fetch Product

Fetch single product

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`GET api/products/{product}`


<!-- END_a285e63bc2d1a5b9428ae9aed745c779 -->

#Services


Apis for Services
<!-- START_ea84a78219560615c4ff37e1fa296629 -->
## Fetch Services

Fetch all Services

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/services?take=4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://bw.kioncm.com/api/services"
);

let params = {
    "take": "4",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "service name",
            "description": "service description",
            "slug": "service_slug",
            "image": "http:\/\/localhost:8000\/images\/default.jpg"
        }
    ]
}
```

### HTTP Request
`GET api/services`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `take` |  optional  | Return spacifc number of services.

<!-- END_ea84a78219560615c4ff37e1fa296629 -->

<!-- START_801a92ef65179289ff8517eda2335be7 -->
## Fetch Service

Fetch single service

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/services/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`GET api/services/{service}`


<!-- END_801a92ef65179289ff8517eda2335be7 -->

#Settings


Apis for Settings
<!-- START_10633908636252dc838d3a5bd392f07c -->
## Fetch Settings

Fetch all settings

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "key": "setting key",
            "value": "setting value"
        }
    ]
}
```

### HTTP Request
`GET api/settings`


<!-- END_10633908636252dc838d3a5bd392f07c -->

<!-- START_8cc4caf985da492764905dc92521c0e8 -->
## Fetch Setting

Fetch single setting

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "key": "setting key",
        "value": "setting value"
    }
}
```

### HTTP Request
`GET api/settings/{setting}`


<!-- END_8cc4caf985da492764905dc92521c0e8 -->

#Sliders


Apis for Sliders
<!-- START_308e5bdba1e46f769aeb4f7fff57a5ef -->
## Fetch Sliders

Fetch all Sliders

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/sliders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/sliders`


<!-- END_308e5bdba1e46f769aeb4f7fff57a5ef -->

<!-- START_52e510b6029492ddbd3c79493f27248a -->
## Fetch sliders

Fetch single Slider

> Example request:

```bash
curl -X GET \
    -G "https://bw.kioncm.com/api/sliders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/sliders/{slider}`


<!-- END_52e510b6029492ddbd3c79493f27248a -->

#general


<!-- START_dc9b4acc1f14d46bcf299d3585bfc381 -->
## api/subscribers
> Example request:

```bash
curl -X POST \
    "https://bw.kioncm.com/api/subscribers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/subscribers`


<!-- END_dc9b4acc1f14d46bcf299d3585bfc381 -->

<!-- START_44997a62c20073c574de58ec11255a50 -->
## api/contact_us
> Example request:

```bash
curl -X POST \
    "https://bw.kioncm.com/api/contact_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/contact_us`


<!-- END_44997a62c20073c574de58ec11255a50 -->

<!-- START_9792377865465dfd12bebd73e7326925 -->
## api/search
> Example request:

```bash
curl -X POST \
    "https://bw.kioncm.com/api/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/search`


<!-- END_9792377865465dfd12bebd73e7326925 -->


