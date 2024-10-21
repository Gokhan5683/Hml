import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt

# Load dataset
df = pd.read_csv('iris.csv')  # Adjust the file path if needed

# Create a histogram for 'sepal_length' by species
sns.histplot(df, x='sepal.length', hue='variety', multiple='stack', bins=15, kde=True)

# Add titles and labels
plt.title('Histogram of Sepal Length by Iris Species')
plt.xlabel('Sepal Length (cm)')
plt.ylabel('Frequency')
plt.legend(title='Species')

# Show the plot
plt.show()
