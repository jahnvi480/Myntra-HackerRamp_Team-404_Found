from keras.applications.vgg16 import VGG16
model = VGG16(weights='imagenet')
from tensorflow.keras.preprocessing import image
from tensorflow.keras.applications.vgg16 import preprocess_input,decode_predictions
import numpy as np
import json
import sys

path_img = sys.argv[1]
path_img = path_img[1:]
img_path = path_img
#There is an interpolation method to match the source size with the target size
#image loaded in PIL (Python Imaging Library)
img = image.load_img(img_path,color_mode='rgb', target_size=(224, 224))

# Converts a PIL Image to 3D Numy Array
x = image.img_to_array(img)
x.shape
# Adding the fouth dimension, for number of images
x = np.expand_dims(x, axis=0)
#mean centering with respect to Image
x = preprocess_input(x)
features = model.predict(x)
p = decode_predictions(features)
l = []
for i in range(2):
  l.append(p[0][i][1])
print(json.dumps(l))