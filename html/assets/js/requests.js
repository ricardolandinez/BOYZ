const request = (url, method, data) => {
  return new Promise((resolve, reject) => {
    fetch(url, {
      method,
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then(async (res) => {
        const data = await res.json();
        if (res.status !== 200) {
          throw data;
        }
        resolve(data);
      })
      .catch((err) => {
        reject(err);
      });
  });
};

export default request;
