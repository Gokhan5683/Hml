import pandas as pd, matplotlib.pyplot as plt
df = pd.read_csv('iris.csv')
plt.scatter(df['petal.length'], df['petal.width'])
plt.xlabel('Petal Length')
plt.ylabel('Petal Width')
plt.title('Petal Length vs Petal Width')
plt.show()