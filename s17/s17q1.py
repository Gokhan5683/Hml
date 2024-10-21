import seaborn as sns
import matplotlib.pyplot as plt
iris = sns.load_dataset('iris')
plt.scatter(iris['sepal_length'], iris['sepal_width'], c=iris['species'].factorize()[0], cmap='viridis')
plt.colorbar(label='Species')
plt.xlabel('Sepal Length')
plt.ylabel('Sepal Width')
plt.show()
