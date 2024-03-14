<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
          .main-div {
                display: flex;
                font-family: Arial, sans-serif;
              }
              .left-column {
                width: 30%;
                padding: 20px;
                background-color: #f0f0f0;
                border-right: 4px solid #ccc;
              }
              .right-column {
                flex-grow: 1;
                padding: 20px;
                background-color: #e0e0e0;
              }
              .content-block {
            display: none;
              }
              .content-block.active {
                  display: block;
              }
              button {
                display: block;
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                background-color: #3498db;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
              }
              button.active {
            background-color: #1f5d8e; 
        }
  </style>
</head>
<body>

<div class="main-div">
        <div class="left-column" id="left-column">
          <button  onclick='showContent(1)' id="button-1">Role</button>
          <button onclick='showContent(2)'  id="button-2">Order</button>
          <button onclick='showContent(3)'  id="button-3">Category</button>
          <button onclick='showContent(4)'  id="button-4">Status</button>
          <button onclick='showContent(5)'  id="button-5">Message</button>
          <button onclick='showContent(6)'  id="button-6">Price Detail</button>
          <button onclick='showContent(7)'  id="button-7">Product Repair</button>
          <button onclick='showContent(8)'  id="button-8">Product Brend</button>
          <button onclick='showContent(9)'  id="button-9">Type Repairs</button>
          <button onclick='showContent(10)'  id="button-10">Comment</button>
        </div>

        <div class="right-column" id="right-column">
              <div class="content-block " id="content-1">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх ролей:</i><b> GET/api/role</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нової ролі:</i> <b> POST/api/role</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання однієї ролі:</i> <b> GET/api/role/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння ролі:</i> <b> PUT/api/role/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння ролі:</i> <b> DELETE/api/role/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                </div>
              </div> 

              <div class="content-block" id="content-2">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх ордерів:</i><b> GET/api/order</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                                      [
                              {
                                  "id": 1,
                                  "user_id": 1,
                                  "category_id": 1,
                                  "created_at": "2024-01-03T09:07:21.000000Z",
                                  "updated_at": "2024-01-03T09:07:21.000000Z"
                              },
                              {
                                  "id": 2,
                                  "user_id": 2,
                                  "category_id": 2,
                                  "created_at": "2024-01-03T09:07:21.000000Z",
                                  "updated_at": "2024-01-03T09:07:21.000000Z"
                              }
                          ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нового ордера:</i> <b> POST/api/order</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання ордера по id:</i> <b> GET/api/order/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння ордера:</i> <b> PUT/api/order/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння ордера:</i> <b> DELETE/api/order/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                  </div>
              </div>
              

              <div class="content-block" id="content-3">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх категорій:</i><b> GET/api/category</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                              [
                                  {
                                      "id": 1,
                                      "name": "cellphone",
                                      "created_at": "2023-12-20T19:32:43.000000Z",
                                      "updated_at": "2023-12-20T19:32:43.000000Z"
                                  },
                                  {
                                      "id": 2,
                                      "name": "leptop",
                                      "created_at": "2023-12-20T19:32:43.000000Z",
                                      "updated_at": "2023-12-20T19:32:43.000000Z"
                                  }
                              ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нової категорії:</i> <b> POST/api/category</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання категорії по id:</i> <b> GET/api/category/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння категорії:</i> <b> PUT/api/category/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння категорії:</i> <b> DELETE/api/category/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                </div>
              </div>
                
              <div class="content-block" id="content-4">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх статусів:</i><b> GET/api/status</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                 [
                                      {
                                          "id": 1,
                                          "name": "at work",
                                          "created_at": "2023-12-20T19:35:08.000000Z",
                                          "updated_at": "2023-12-20T19:35:08.000000Z"
                                      },
                                      {
                                          "id": 2,
                                          "name": "completed",
                                          "created_at": "2023-12-20T19:35:08.000000Z",
                                          "updated_at": "2023-12-20T19:35:08.000000Z"
                                      }
                                  ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нового статусу:</i> <b> POST/api/status</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання статусу по id:</i> <b> GET/api/status/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння статусу:</i> <b> PUT/api/status/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння статусу:</i> <b> DELETE/api/status/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
              </div>            


              <div class="content-block " id="content-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх повідомлень:</i><b> GET/api/message</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                  [ 
                                                              {
                                          "id": 1,
                                          "user_id": 1,
                                          "text": "message from first client",
                                          "manager_id": 1,
                                          "created_at": "2024-01-03T09:08:40.000000Z",
                                          "updated_at": "2024-01-03T09:08:40.000000Z"
                                      },
                                      {
                                          "id": 2,
                                          "user_id": 2,
                                          "text": "message from second client",
                                          "manager_id": 1,
                                          "created_at": "2024-01-03T09:08:40.000000Z",
                                          "updated_at": "2024-01-03T09:08:40.000000Z"
                                      }
                                  ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нового повідомлення:</i> <b> POST/api/message</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання одного повідомлення:</i> <b> GET/api/message/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння повідомлення:</i> <b> PUT/api/message/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння повідомлення:</i> <b> DELETE/api/message/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                </div>
              </div> 

              <div class="content-block" id="content-6">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх вартостей деталей:</i><b> GET/api/price_detail</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                               [
                                    {
                                        "id": 1,
                                        "name": "dynamic",
                                        "price": "100.50",
                                        "created_at": "2023-12-20T19:41:47.000000Z",
                                        "updated_at": "2023-12-20T19:41:47.000000Z"
                                    },
                                    {
                                        "id": 2,
                                        "name": "glass",
                                        "price": "200.00",
                                        "created_at": "2023-12-20T19:41:47.000000Z",
                                        "updated_at": "2023-12-20T19:41:47.000000Z"
                                    }
                                ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нової вартості деталі:</i> <b> POST/api/price_detail</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання вартості деталі по id:</i> <b> GET/api/price_detail/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння вартості деталі по id:</i> <b> PUT/api/price_detail/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння вартості деталі:</i> <b> DELETE/api/price_detail/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                  </div>
              </div>
              

              <div class="content-block" id="content-7">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх товарів які ремонтуються:</i><b> GET/api/product_repair</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "leptop",
                                            "created_at": "2023-12-20T19:45:14.000000Z",
                                            "updated_at": "2023-12-20T19:45:14.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "cellphone",
                                            "created_at": "2023-12-20T19:45:14.000000Z",
                                            "updated_at": "2023-12-20T19:45:14.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нового товару:</i> <b> POST/api/product_repair</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання товару по id:</i> <b> GET/api/product_repair/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння товару:</i> <b> PUT/api/product_repair/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння товару:</i> <b> DELETE/api/product_repair/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                </div>
              </div>
                
              <div class="content-block" id="content-8">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх брендів:</i><b> GET/api/product_brend</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "iphone",
                                            "created_at": "2023-12-20T19:46:55.000000Z",
                                            "updated_at": "2023-12-20T19:46:55.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "samsung",
                                            "created_at": "2023-12-20T19:46:55.000000Z",
                                            "updated_at": "2023-12-20T19:46:55.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нового бренду:</i> <b> POST/api/product_brend</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання бренду по id:</i> <b> GET/api/product_brend/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння бренду:</i> <b> PUT/api/product_brend/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння бренду:</i> <b> DELETE/api/product_brend/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                     
              </div>
              
              <div class="content-block" id="content-9">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх видів ремонтів:</i><b> GET/api/type_repair</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                               [
                                    {
                                        "id": 1,
                                        "name": "Replacing an element",
                                        "created_at": "2023-12-20T19:49:25.000000Z",
                                        "updated_at": "2023-12-20T19:49:25.000000Z"
                                    },
                                    {
                                        "id": 2,
                                        "name": "Recovery",
                                        "created_at": "2023-12-20T19:49:25.000000Z",
                                        "updated_at": "2023-12-20T19:49:25.000000Z"
                                    }
                                ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нового виду ремонту:</i> <b> POST/api/type_repair</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання виду немонту по id:</i> <b> GET/api/type_repair/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння виду ремонту:</i> <b> PUT/api/type_repair/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння виду ремонту:</i> <b> DELETE/api/type_repair/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                   
              </div>
              
              <div class="content-block" id="content-10">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i>Отримання всіх відгуків:</i><b> GET/api/comment</b>
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                            [
                                {
                                    "id": 1,
                                    "user_id": 1,
                                    "text": "Хочу висловити подяку сервісному центру за професійну роботу. Була поломка холодильника.
                                     На заявку відреагували на протязі дня (Олександр). Ремонт холодильника здійснював Федорович Андрій - 
                                     професіонал і майстер своєї справи. Порядна людина.  Була поломка компресора і заміну здійснили безкоштовно,
                                     навіть за виклик не взяв кошти хоча територіально ми знаходимося у Фастівському районі. Дякую Вам."
                                    "created_at": "2024-01-06T18:50:27.000000Z",
                                    "updated_at": "2024-01-06T18:50:27.000000Z"
                                },
                                {
                                    "id": 2,
                                    "user_id": 2,
                                    "text": "Поломка холодильника викликала в родині шок, на вулиці плюсова температура, сусіди розповідають,
                                     що ремонт холодильника затягнеться на тижні, якщо поламався мотор-компресор. У той же день 25.05.2021 
                                     подзвонив в серісний центр LG, сказали що майстер буде протягом 24 годин. Не вірилося. На другий день після 
                                     контрольного  дзвінка, в призначений час, приїхав майстер Саша. Через дві години, після заміни мотора, 
                                     холодильник заробив.Я побачив роботу справжнього професіонала, майстри своєї справи."
                                    "created_at": "2024-01-06T18:54:26.000000Z",
                                    "updated_at": "2024-01-06T18:54:26.000000Z"
                                }
                            ]
                            </pre>
                          </div>
                        </div>
                      </div>                
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i> Додавання нового відгуку:</i> <b> POST/api/comment</b>
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i> Отримання відгуку по id:</i> <b> GET/api/comment/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            <pre>
                                      [
                                          {
                                              "id": 1,
                                              "name": "admin",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          },
                                          {
                                              "id": 2,
                                              "name": "client",
                                              "created_at": "2023-12-19T18:50:52.000000Z",
                                              "updated_at": "2023-12-19T18:50:52.000000Z"
                                          }
                                      ]
                              </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          <i> Оновленння відгуку:</i> <b> PUT/api/comment/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          <i> Видаленння відгуку:</i> <b> DELETE/api/comment/{id}</b>
                          </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                          <pre>
                                    [
                                        {
                                            "id": 1,
                                            "name": "admin",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "name": "client",
                                            "created_at": "2023-12-19T18:50:52.000000Z",
                                            "updated_at": "2023-12-19T18:50:52.000000Z"
                                        }
                                    ]
                            </pre>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    </div> 
              </div>
        </div> 



</div>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>    
      function showContent(index) {
        // Скрываем все блоки контента
        var contentBlocks = document.querySelectorAll('.content-block');
        contentBlocks.forEach(function(block) {
          block.classList.remove('active');
        });
        // Показываем выбранный блок контента
        var selectedContent = document.getElementById('content-' + index);
        selectedContent.classList.add('active');

        var buttons = document.querySelectorAll('.left-column button');
        buttons.forEach(function (button) {
            button.classList.remove('active');
        });

        // Устанавливаем активный класс для нажатой кнопки
        var activeButton = document.getElementById('button-' + index);
        activeButton.classList.add('active');
      }
  </script>
 </body> 
</html>