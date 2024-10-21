import pandas as pd
import matplotlib.pyplot as plt

# Load the dataset
df = pd.read_csv('iris.csv')  # Replace with your actual file path if needed

# Count the frequency of each species
species_counts = df['variety'].value_counts()

# Create a bar plot
plt.figure(figsize=(8, 6))
species_counts.plot(kind='bar', color=['blue', 'orange', 'green'])
plt.title('Frequency of Iris Species')
plt.xlabel('Species')
plt.ylabel('Frequency')
plt.xticks(rotation=0)  # Keep x labels horizontal
plt.grid(axis='y', linestyle='--', alpha=0.7)
plt.show()
