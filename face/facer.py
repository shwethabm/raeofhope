import os
import cv2
import numpy as np 
faces = []
#list to hold labels for all subjects
labels = []
 
subjects = ["", "shradha kapoor"]
face_cascade = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")
img = cv2.imread("testdata/test1.jpg")
gray = cvtColor(img,cv2.COLOR_BGR2GRAY)
faces = face_cascade.detectMultiScale(gray, scaleFactor = 1.05, minNeighbors=5)
if (len(faces) == 0):
      return None, None
(x, y, w, h) = faces[0]
dirs = os.listdir(data_folder_path)
for dir_name in dirs:
    if not dir_name.startswith("s"):
      continue; 
    label = int(dir_name.replace("s", ""))
    subject_dir_path = data_folder_path + "/" + dir_name
    subject_images_names = os.listdir(subject_dir_path)
    for image_name in subject_images_names:
        if image_name.startswith("."):
          continue;
        image_path = subject_dir_path + "/" + image_name
        image = cv2.imread(image_path)
        cv2.imshow("Training on image...", image)
        cv2.waitKey(100)
        face, rect = detect_face(image)