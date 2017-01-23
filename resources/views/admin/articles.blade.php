<articles inline-template>
    <div>
        <div class="panel panel-default panel-flush">
            <!-- Create Button -->
            <button type="submit" class="btn btn-primary btn-block" @click="addArticle()">
                <i class="fa fa-plus"></i> Add Article
            </button>
        </div>

        <!-- List all Articles -->
        <div class="panel panel-default">
            <div class="panel-heading">Articles (In Widget)</div>

            <div class="panel-body">
                <article class="article-container" v-for="article in widgetArticles">
                    <img class="article-image" :src="
                    article.image_url" :alt="article.title" @click="editArticle(article)" />
                    <h3 class="article-title" @click="editArticle(article)">
                        @{{ article.title }}
                    </h3>
                </article>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Articles (Other)</div>

            <div class="panel-body">
                <article class="article-container" v-for="article in otherArticles">
                    <img class="article-image" :src="
                    article.image_url" :alt="article.title" @click="editArticle(article)" />
                    <h3 class="article-title" @click="editArticle(article)">
                        @{{ article.title }}
                    </h3>
                </article>
            </div>
        </div>

        <div>
            @include('admin.modals.add-article')
        </div>

        <div>
            @include('admin.modals.edit-article')
        </div>
    </div>
</articles>