var axios = require('axios');

// Sınıf seviyelerini getirme
axios.get('https://api.dersplus.net/ogm/uniteler/list-class')
  .then(function (response) {
    var classList = response.data;
    
    // Sınıf ID ile dersleri getirme
    var classId = 'your_class_id'; // buraya sınıf ID giriniz
    axios.get(`https://api.dersplus.net/ogm/uniteler/get-lesson?sınıfId=${classId}`)
      .then(function (response) {
        var lessons = response.data;
      
        // Ders ID ile üniteleri getirme
        var lessonId = 'your_lesson_id'; // buraya ders ID giriniz
        axios.get(`https://api.dersplus.net/ogm/uniteler/get-unite?dersId=${lessonId}`)
          .then(function (response) {
            var units = response.data;
          });
      });
  });
