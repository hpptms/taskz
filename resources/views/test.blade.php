<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Router</title>
</head>
<body>
    <div id="app">
        <!-- Desコンポーネントへのリンク -->
        <router-link to="/desc">・説明ページ</router-link>
      
      <br>

        <!-- Userコンポーネントへのリンク -->
        <router-link to="/user">・Userページ</router-link>

        <!-- コンポーネントの表示領域 -->
        <router-view></router-view>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="https://unpkg.com/vue-router@3.0.7/dist/vue-router.js"></script>
  
   <script>
    //VueRouterとVueの定義
    //コンポーネントの中身を定数として作成
    const Desc = { template: '<div><p>説明用のページです</p></div>'}
    const User = { 
      template: `
        <div>
          <p>@{{ hello }}</p>
          <p>名前:@{{name}}</p>
        </div>
      `,
      data(){
        return {
          name: "AAAさん",
          hello: "こんにちは"
        }
      }
    }

    //VueRouterインスタンスの生成
    const router = new VueRouter({
      mode: 'history',
      routes: [
        {
          path: '/desc',
          component: Desc
        },
        {
          path: '/user',
          component: User
        }
      ]
    })

    //Vueインスタンスの生成
    const app = new Vue({
      router
    }).$mount('#app')
  </script>
  
</body>
</html>