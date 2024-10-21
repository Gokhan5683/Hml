import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt

iris = pd.read_csv('iris.csv')

features = ['sepal.length', 'sepal.width', 'petal.length', 'petal.width']
iris_melted = iris.melt(id_vars='variety', value_vars=features, var_name='feature', value_name='value')

sns.boxplot(x='variety', y='value', hue='feature', data=iris_melted)
plt.title('Feature Distribution Across Species')
plt.show()