<!-- Begin Page Content -->
<div class="content-wrapper-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Form -->
                <div class="card shadow mb-4">
                    <div class="row ">
                        <div class="col-12 text-left ">
                            <a href="<?php echo URL?>/articles"><button type="button"
                                    class="border-0 bg-white text-black2 mt-3 ml-3"><i
                                        class="fa-solid fa-arrow-left me-2 fa-2x"></i></button></a>
                        </div>
                    </div>

                    <form action="" method="POST">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header pt-4 pb-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0">Edit Article</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="form-area" id="formFields">
                                <div class="row">
                                    <div class="form-area" id="formFields">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" id="article_date"
                                                        name="article_date" placeholder="xyz"
                                                        value="<?php echo $article['article_date'];?>" required />
                                                    <label for="article_date">Article Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="title" name="title" placeholder="123" value="<?php echo $article['title'];?>" required />
                                                    <label for="title">Title</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <select class="form-select" id="category_id" name="category_id"
                                                        aria-label="Floating label select example" required>
                                                        <option value="">
                                                            Category
                                                        </option>
                                                        <?php foreach($categories as $category){?>
                                                        <option value="<?php echo $category['id'];?>" <?php if($article['category_id'] == $category['id']){echo "selected";}?>>
                                                            <?php echo $category['name'];?>
                                                        </option>
                                                        <?php }?>
                                                    </select>
                                                    <label for="category_id">Choose an option</label>
                                                    <?php echo form_error('category_id');?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="url" name="url" value="<?php echo $article['url'];?>" placeholder="123" required />
                                                    <label for="url">URL</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="description1" name="description1"
                                                        placeholder="123" required><?php echo $article['description1']?></textarea>
                                                    <label for="description1">Description 1</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <textarea class="form-control" id="description2" name="description2"
                                                        placeholder="123" required><?php echo $article['description1']?></textarea>
                                                    <label for="description2">Description 2</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="image" name="image" value="<?php echo $article['image'];?>" placeholder="123" required />
                                                    <label for="image">Image</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="read_time" name="read_time" placeholder="123" value="<?php echo $article['read_time'];?>" required />
                                                    <label for="read_time">Read Time</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="123" value="<?php echo $article['meta_title'];?>" required />
                                                    <label for="meta_title">Meta Title</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="123" value="<?php echo $article['meta_description'];?>" required />
                                                    <label for="meta_description">Meta Description</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="123" value="<?php echo $article['meta_keywords'];?>" required />
                                                    <label for="meta_keywords">Meta Keywords</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-floating">
                                                    <select class="form-select" id="author_id" name="author_id"
                                                        aria-label="Floating label select example" required>
                                                        <option value="">
                                                            Author
                                                        </option>
                                                        <?php foreach($authors as $author){?>
                                                        <option value="<?php echo $author['id'];?>" <?php if($article['author_id'] == $author['id']){echo "selected";}?>>
                                                            <?php echo $author['name'];?>
                                                        </option>
                                                        <?php }?>
                                                    </select>
                                                    <label for="author_id">Choose an option</label>
                                                    <?php echo form_error('author_id');?>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="system_url" name="system_url" placeholder="" value="<?php echo $article['system_url'];?>" />
                                                    <label for="meta_description">System1 URL</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-right mb-4">
                                    <button type="submit"
                                        class="btn text-decoration-none btn-common bg-black2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
</div>
<!-- End of Main Content -->
