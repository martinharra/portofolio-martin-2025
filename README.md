# NGL Clone - Running Instructions

## File Structure
Make sure your files are organized as follows:
```
d:\flutter\joki\portofolio-martin2025\
  ├── ngl.html
  ├── styles.css
  └── components\
      └── App.js
```

## Method 1: Direct Browser Open
1. Double-click on `ngl.html` to open it directly in your default browser
2. The application should load and be fully functional

## Method 2: Using a Local Server (Recommended)
For a better development experience:

1. Install Node.js if you don't have it: https://nodejs.org/
2. Open a command prompt in your project directory
3. Install a simple HTTP server:
   ```
   npm install -g http-server
   ```
4. Run the server:
   ```
   http-server
   ```
5. Open your browser and navigate to: http://localhost:8080/ngl.html

## Notes
- All data is stored in memory and will be lost when you refresh the page
- For a production app, you'd want to connect to a backend database
- The application is responsive and works on mobile devices
