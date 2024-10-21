import numpy as np
import matplotlib.pyplot as plt

# Original data
data = np.random.randint(1, 101, 50)

# Adding two outliers
data_with_outliers = np.append(data, [150, -50])

# Create subplots
fig, axs = plt.subplots(2, 2)

# Line chart
axs[0, 0].plot(data_with_outliers, 'bo-')
axs[0, 0].set_title('Line Chart')

# Scatter plot
axs[0, 1].scatter(range(len(data_with_outliers)), data_with_outliers, c='r')
axs[0, 1].set_title('Scatter Plot')

# Histogram
axs[1, 0].hist(data_with_outliers, bins=10, color='g')
axs[1, 0].set_title('Histogram')

# Box plot with outliers
axs[1, 1].boxplot(data_with_outliers, patch_artist=True, boxprops={'facecolor': 'purple'})
axs[1, 1].set_title('Box Plot (with Outliers)')

# Adjust layout
plt.tight_layout()
plt.show()
