import datetime
import os

#path to the file
path = r"C:\Users\DELL\OneDrive\Hình ảnh\Cuộn phim\WIN_20240524_17_04_20_Pro.jpg"

# file modification timestamp of a file
m_time = os.path.getmtime(path)

# convert timestamp into datatime object
dt_m = datetime.datetime.fromtimestamp(m_time)

print(dt_m)