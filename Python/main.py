import requests

# Sınıf seviyelerini getirme
response = requests.get('https://api.dersplus.net/ogm/uniteler/list-class')
classList = response.json()

# Sınıf ID ile dersleri getirme
classId = 'your_class_id'  # buraya sınıf ID giriniz
response = requests.get(f'https://api.dersplus.net/ogm/uniteler/get-lesson?sınıfId={classId}')
lessons = response.json()

# Ders ID ile üniteleri getirme
lessonId = 'your_lesson_id'  # buraya ders ID giriniz
response = requests.get(f'https://api.dersplus.net/ogm/uniteler/get-unite?dersId={lessonId}')
units = response.json()
