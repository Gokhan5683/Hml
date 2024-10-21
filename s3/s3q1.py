import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

iris_df = pd.read_csv('iris.csv')
species_map = {'setosa': 0, 'versicolor': 1, 'virginica': 2}
iris_df['species'] = iris_df['species'].map(species_map)

plt.figure(figsize=(10, 6))
sns.boxplot(x='species', y='sepal_length', data=iris_df)
plt.title('Sepal Length Distribution Across Species')
plt.show()

plt.figure(figsize=(10, 6))
sns.boxplot(x='species', y='sepal_width', data=iris_df)
plt.title('Sepal Width Distribution Across Species')
plt.show()

plt.figure(figsize=(10, 6))
sns.boxplot(x='species', y='petal_length', data=iris_df)
plt.title('Petal Length Distribution Across Species')
plt.show()

plt.figure(figsize=(10, 6))
sns.boxplot(x='species', y='petal_width', data=iris_df)
plt.title('Petal Width Distribution Across Species')
plt.show()
