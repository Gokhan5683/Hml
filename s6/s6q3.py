import pandas as pd
data = pd.read_csv('heights_weights.csv')
print("Shape of the dataset:", data.shape)
print("\nFirst 10 rows:")
print(data.head(10))
print("\nLast 10 rows:")
print(data.tail(10))
print("\nRandom 20 rows:")
print(data.sample(20))

#Sample Dataset
#Height (inches),Weight (pounds)
62,120
65,150
68,160
70,180
72,200
64,130
66,140
69,170
71,190
63,125
75,210
80,250
62,115
66,145
67,155
73,205
74,215
61,110
65,135
72,205
