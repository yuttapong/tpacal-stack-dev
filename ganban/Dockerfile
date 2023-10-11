# FROM node:18
FROM node:18.12.1-alpine

# FROM เอาไว้เลือก Base Image จาก Docker Hub ที่ต้องการใช้เป็นสภาพแวดล้อม

LABEL maintainer="Noom"

LABEL description="This dockerfile for install the backend."

WORKDIR /ganban
# WORKDIR คิือการกำหนด directory ของการทำงาน 
# เพื่อให้คำสั่งอื่นๆของ Docker ไปทำงานที่นั่น ซึ่งในที่นี้เป็น /ganban

COPY package.json ./
# คัดลอก package.json ไปใส่ที่ ./

COPY package-lock.json ./
# # คัดลอก package-lock.json ไปใส่ที่ ./

RUN npm install nodemon
# ในที่นี้ คือ จาก ./ ไปหา ./

COPY ./ ./
# COPY คือคำสั่งที่คัดลอกโค้ดจาก directory ต้นทาง ไปหา ปลายทาง 
# ในที่นี้ คือ จาก ./ ไปหา ./

ENV NODE_ENV development

CMD npm run dev
# CMD คีอ การใส่คำสั่งเพื่อรันโปรแกรม จากตัวอย่างคือ คำสั่ง "npm run dev"