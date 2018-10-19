import cv2
from cv2 import *
import numpy 
face_cascade = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")
name = raw_input("enter name of image :")
img = cv2.imread (name)
gray_img = cvtColor(img,cv2.COLOR_BGR2GRAY)
faces = face_cascade.detectMultiScale(gray_img, scaleFactor = 1.05, minNeighbors=5)
print(type(faces))
print(faces)
for x,y,w,h in faces:
    img = cv2.rectangle(img, (x,y), (x+w,y+h),(0,255,0),3)
resized = cv2.resize(img, (int(img.shape[1]),int(img.shape[0])))
cv2.imshow("gray",resized)
cv2.waitKey(0)
cv2.destroyAllWindows()
