// sample data for the notice board
const news = [
    { title: 'Welcome Back to School!', content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' },
    { title: 'School Event Coming Up', content: 'Nulla facilisi. Nullam dignissim purus non lorem bibendum fringilla.' },
    { title: 'School Closed on Friday', content: 'Etiam bibendum dui quis eros dignissim, sit amet tempor sapien hendrerit.' }
  ];
  
  // generate the list of news items dynamically
  const newsList = document.getElementById('news-list');
  for (let i = 0; i < news.length; i++) {
    const item = news[i];
    const li = document.createElement('li');
    li.innerHTML = `<h3>${item.title}</h3><p>${item.content}</p>`;
    newsList.appendChild(li);
  }
  