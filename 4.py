import sys
import cv2
import numpy as np

a = sys.argv[1]
b = sys.argv[2]
c = sys.argv[3]
d = sys.argv[4]
newA = 'upload/'+a
newB = 'upload/'+b
newC = 'upload/'+c
newD = 'upload/'+c
judul = sys.argv[5]
newjudul = 'stitching/'+judul+'.jpg'

#Read the images from your directory

dim=(1024,768)
satu=cv2.imread(newA,cv2.IMREAD_COLOR)
satu=cv2.resize(satu,dim,interpolation = cv2.INTER_AREA)   #ReSize to (1024,768)
dua=cv2.imread(newB,cv2.IMREAD_COLOR)
dua=cv2.resize(dua,dim,interpolation = cv2.INTER_AREA) #ReSize to (1024,768)
tiga=cv2.imread(newC,cv2.IMREAD_COLOR)
tiga=cv2.resize(tiga,dim,interpolation = cv2.INTER_AREA) #ReSize to (1024,768)
empat=cv2.imread(newD,cv2.IMREAD_COLOR)
empat=cv2.resize(empat,dim,interpolation = cv2.INTER_AREA) #ReSize to (1024,768)

images=[]
images.append(satu)
images.append(dua)
images.append(tiga)
images.append(empat)

stitcher = cv2.Stitcher.create()
ret,pano = stitcher.stitch(images)

if ret==cv2.STITCHER_OK:
	
    cv2.imshow('Panorama',pano)
    cv2.imwrite(newjudul,pano)
    cv2.waitKey()
    cv2.destroyAllWindows()
    
else:
    print("Gagal Stitching")



  
 