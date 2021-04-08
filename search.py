from reverseimagesearch import ColorDescriptor
from searcher import Searcher
import cv2
import sys
import json

cd = ColorDescriptor((8, 12, 3))
path_img = sys.argv[1]
path_img = path_img[1:]
query = cv2.imread(path_img)
features = cd.describe(query)
searcher = Searcher('index.csv')
results = searcher.search(features)

total_files = {}
k = 0
for (score, resultID) in results:
	result = cv2.imread(resultID)
	total_files[k] = resultID
	k+=1
print(json.dumps(total_files))
