import numpy as np, matplotlib.pyplot as plt
data = np.random.randint(1, 101, 50)
fig, axs = plt.subplots(2, 2)
axs[0, 0].plot(data, 'bo-');
axs[0, 0].set_title('Line Chart')
axs[0, 1].scatter(range(50), data, c='r');
axs[0, 1].set_title('Scatter Plot')
axs[1, 0].hist(data, bins=10, color='g');
axs[1, 0].set_title('Histogram')
axs[1, 1].boxplot(data, patch_artist=True, boxprops={'facecolor': 'purple'});
axs[1, 1].set_title('Box Plot')
plt.tight_layout();
plt.show()