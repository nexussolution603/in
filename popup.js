document.addEventListener('DOMContentLoaded', function() {
    const WEBSITE_URL = "https://nexussolution603.github.io/in/";
    
    // Open Website Button
    document.getElementById('openWebsite').addEventListener('click', function() {
        chrome.tabs.create({ url: WEBSITE_URL, active: true });
    });
    
    // Refresh Page Button
    document.getElementById('refreshPage').addEventListener('click', function() {
        chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
            if (tabs[0].url.includes('nexussolution603.github.io')) {
                chrome.tabs.reload(tabs[0].id);
            } else {
                chrome.tabs.create({ url: WEBSITE_URL, active: true });
            }
        });
    });
    
    // Bookmark Button
    document.getElementById('bookmarkPage').addEventListener('click', function() {
        chrome.tabs.create({ url: WEBSITE_URL, active: true }, function(tab) {
            setTimeout(() => {
                chrome.scripting.executeScript({
                    target: { tabId: tab.id },
                    function: bookmarkPage
                });
            }, 1000);
        });
    });
    
    // Update status based on current tab
    chrome.tabs.query({active: true, currentWindow: true}, function(tabs) {
        const currentTab = tabs[0];
        const statusText = document.getElementById('statusText');
        
        if (currentTab.url.includes('nexussolution603.github.io')) {
            statusText.textContent = "Currently Viewing";
            statusText.style.color = "#4CAF50";
        } else {
            statusText.textContent = "Not Currently Open";
            statusText.style.color = "#FF9800";
        }
    });
    
    // Function to bookmark the page
    function bookmarkPage() {
        if (window.confirm("Bookmark NEXUS SOLUTION 603 website?")) {
            window.alert("Website bookmarked! (Note: This uses browser bookmarking)");
        }
    }
});