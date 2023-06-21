
# OGM Lise Dersleri ve Üniteleri API 

Bu proje dersplus API kullanarak 9,10,11,12.sınıf temel derslerin adını ve derslerin oluştuğu ünitelerin adını çekmenizi sağlar. API güncel tutulmaktadır. Veriler Ortaöğretim Genel Müdürlüğünden elde edilmektedir. PHP, Node.js ve Python ile veri çekme örnekleri de verilmiştir.


## API Kullanımı

#### Sınıf seviyelerini getirme

```http
  GET https://api.dersplus.net/ogm/uniteler/list-class
```

#### Sınıf ID ile dersleri getirme

```http
  GET https://api.dersplus.net/ogm/uniteler/get-lesson
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `sinifId`      | `string` | **Required**. https://api.dersplus.net/ogm/uniteler/get-lesson aldığınız ID. |

#### Ders ID ile üniteleri getirme

```http
  GET https://api.dersplus.net/ogm/uniteler/get-unite
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `dersId`      | `string` | **Required**. https://api.dersplus.net/ogm/uniteler/get-unite?sınıfId={int} ile aldığınız ID. |

