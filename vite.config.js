import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import {readdirSync, lstatSync} from 'fs';
import {resolve} from 'path';

function getFilesFromDir(dir) {
    const filesToReturn = [];

    function walkDir(currentPath) {

        if (lstatSync(currentPath).isFile()) {
            filesToReturn.push(currentPath);
            return;
        }

        const files = readdirSync(currentPath);
        for (let i in files) {
            console.log(files[i]);
            const curFile = resolve(currentPath, files[i]);
            if (lstatSync(curFile).isDirectory()) {
                walkDir(curFile);
                continue;
            }
            const file = resolve(currentPath, files[i]);
            filesToReturn.push(file);
        }
    }

    walkDir(resolve(__dirname, dir));
    return filesToReturn;
}

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...getFilesFromDir('resources/css'),
                ...getFilesFromDir('resources/js'),
            ],
            refresh: true,
        }),
    ],
});