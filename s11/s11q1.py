from sklearn.datasets import load_iris
import pandas as pd
import matplotlib.pyplot as pl
iris = load_iris()
iris_df = pd.DataFrame(iris.data, columns=iris.feature_names)
iris_df['species'] = iris.target
species_map = {0: 'setosa', 1: 'versicolor', 2: 'virginica'}
iris_df['species'] = iris_df['species'].map(species_map)
species_counts = iris_df['species'].value_counts()
plt.figure(figsize=(6,6))
plt.pie(species_counts, labels=species_counts.index, autopct='%1.1f%%', startangle=140, 
        colors=['lightblue', 'lightgreen', 'lightcoral'])
plt.title('Species Distribution in Iris Dataset')
plt.show()
