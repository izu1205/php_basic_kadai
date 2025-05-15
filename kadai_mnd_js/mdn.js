const today = new Date();

const year = today.getFullYear();        // 年（例: 2025）
const month = today.getMonth() + 1;      // 月（0〜11なので +1 する必要あり）
const day = today.getDate();             // 日（1〜31）

console.log(`今日は ${year}年${month}月${day}日 です。`);
