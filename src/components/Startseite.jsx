var htmlContent = require('src/Unify-v2.6.3/html/website/cryptostrains.io/index.html');

// or you can also write
// import htmlContent from 'path/to/html/file.html');


export default function MyComponent() {
    return (
        <div dangerouslySetInnerHTML={ {__html: htmlContent} } />
    );
}