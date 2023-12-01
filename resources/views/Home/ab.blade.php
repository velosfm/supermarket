<!DOCTYPE html><html lang="el"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/><link rel="shortcut icon" type="image/x-icon" media="all" href="https://static.ab.gr/static/next/icons/favicon.png?buildNumber=72bc3762f256297c9c998380b25161e295976b53fd265c2608e0bc89f81ae9a3"/><link rel="preload" type="font/woff2" </head><body>
    <script> const puppeteer = require("puppeteer");

    async function parseLogRocketBlogHome() {
// Launch the browser
        const browser = await puppeteer.launch();

// Open a new tab
        const page = await browser.newPage(); 


// Visit the page and wait until network connections are completed
        await page.goto('https://logrocket.com/blog', { waitUntil: 'networkidle2' });

// Interact with the DOM to retrieve the titles
        const titles = await page.evaluate(() => { 
    // Select all elements with crayons-tag class 
            return [...document.querySelectorAll('.card-title a')].map(el => el.textContent);
        });

// Don't forget to close the browser instance to clean up the memory
        await browser.close();

// Print the results
        titles.forEach(title => console.log(`- ${title}`))
    }

    parseLogRocketBlogHome();
</script>
</body></html>