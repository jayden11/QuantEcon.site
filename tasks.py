#-Tasks File for QuantEcon.site-#

import os

NEWS_BUILD_DIR = "news"

# Check for a news directory
if not os.path.exists(NEWS_BUILD_DIR):
    print("Cannot find a news build directory (%s) ... creating one now"%NEWS_BUILD_DIR)
    os.makedirs(NEWS_BUILD_DIR)
