import sys
import cv2
import numpy as np
import tkinter
from tkinter import messagebox

# hide main window
root = tkinter.Tk()
root.withdraw()


a = sys.argv[1]
b = sys.argv[2]
newA = 'upload/'+a
newB = 'upload/'+b
judul = sys.argv[3]
newjudul = 'stitching/'+judul+'.jpg'


dim=(1024,768)
satu=cv2.imread(newA,cv2.IMREAD_COLOR)
satu=cv2.resize(satu,dim,interpolation = cv2.INTER_AREA)   #ReSize to (1024,768)
dua=cv2.imread(newB,cv2.IMREAD_COLOR)
dua=cv2.resize(dua,dim,interpolation = cv2.INTER_AREA) #ReSize to (1024,768)
#yuda=cv2.imread('Yuda.jpg',cv2.IMREAD_COLOR)
#yuda=cv2.resize(yuda,dim,interpolation = cv2.INTER_AREA) #ReSize to (1024,768)

images=[]
images.append(satu)
images.append(dua)
#images.append(yuda)
#stitcher = cv2.createStitcher()
stitcher = cv2.Stitcher.create()
ret,pano = stitcher.stitch(images)

if ret==cv2.STITCHER_OK:
	
    cv2.imwrite(newjudul,pano)

    cv2.imshow('Panorama',pano)
    messagebox.showinfo("Information","Stitching selesai ...")
    cv2.waitKey()

    cv2.destroyAllWindows()
    
else:
    print("Gagal Stitching")


  
 